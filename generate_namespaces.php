<?php

$docs = file_get_contents(__DIR__ . '/yaf.php');

const CD                  = '_';
const NSD                 = '\\';
const CLASS_DELIMITER     = "###CLASS###";
const DOC_BLOCK_DELIMITER = "###DOCBLOCK###";
const DS                  = DIRECTORY_SEPARATOR;

/**
 * @param string $class
 * @return array
 */
function get_class_names($class)
{
	$matches = [];
	preg_match_all('/[^\w]+((?:[A-Z][a-zA-Z]+_)*[A-Z][a-zA-Z]+)/', $class, $matches);
	foreach($matches[1] as $key => &$match)
	{
		$match = trim($match);
		// remove constants; e.g. CLASS_NAME
		if(preg_match('/^[A-Z_]+$/', $match))
		{
			unset($matches[1][$key]);
		}
	}
	return $matches[1];
}

/**
 * @param string $className
 * @return bool
 */
function in_main_namespace($className)
{
	$count = substr_count($className, CD);
	return ($count == 1 || $count == 2 && preg_match('/_abstract$|_static$|_interface$/i', $className));
}

/**
 * @param $main_class
 * @param $delimiter
 * @param $replace_with
 * @return mixed
 */
function get_namespaced_class_name($main_class, $delimiter, $replace_with)
{
	return (in_main_namespace($main_class) ?
		str_replace('Yaf' . $delimiter, 'Yaf' . $replace_with, $main_class) :
		str_replace($delimiter, $replace_with, $main_class)
	);
}

/**
 * @param $statement
 * @return string
 */
function get_reference_from_statement($statement)
{
	// a method
	if(strpos($statement, 'function ') !== false)
	{
		$matches = [];
		preg_match('/function ([\w]+)\(/', $statement, $matches);

		return $matches[1] . '()';
	}
	// a constant
	elseif(strpos($statement, 'const ') !== false)
	{
		$matches = [];
		preg_match('/const ([^=]+)=/', $statement, $matches);
		return trim($matches[1]);
	}
	// a property
	else
	{
		$matches = [];
		preg_match('/(\$[^=]+)[=;]/', $statement, $matches);

		return trim($matches[1]);
	}
}

/**
 * @param $class
 * @param $origin_class_name
 */
function add_doc_blocks(&$class, $origin_class_name)
{
	$class_body_start = strpos($class, '{');
	$class_body_end   = strrpos($class, '}');
	$class_parts      = [];

	$class_body_length = $class_body_end - $class_body_start;

	$class_parts[0] = substr($class, 0, $class_body_start + 1);
	$class_parts[1] = substr($class, $class_body_start + 1, $class_body_length - 1);
	$class_parts[2] = substr($class, $class_body_end);

	$methods_body = & $class_parts[1];

	$blocks = [];
	preg_match_all(
		'/\/\*{2}(?:[\s\S]+?)\*\/[^a-z]+(?:const |public |private |protected |abstract |final |static ).*[\;\}]/i',
		trim($methods_body),
		$blocks
	);

	foreach($blocks as &$block)
	{
		$doc_block_parts = explode(DOC_BLOCK_DELIMITER, $methods_body);
		foreach($doc_block_parts as &$part)
		{
			$part = trim($part);
			if(!$part)
			{
				continue;
			}
			$reference = get_reference_from_statement($part);
			$part      = "    /**\n     * @see $origin_class_name::$reference\n     */\n    " . $part;
		}
	}

	$methods_body = implode(PHP_EOL, $blocks);
	$class        = implode(PHP_EOL, $class_parts);
}

// remove DEFINEs
list($constants, $docs_without_comments) = preg_split('/\/{2}[=]+/', $docs);
unset($constants, $docs); // free memory

// remove one-line comments
$docs_without_comments = preg_replace('/([\s\t\r\n]+)\/\/.*/', '$1', $docs_without_comments);

// remove PHPDocs and comment blocks
$docs_without_doc_blocks = preg_replace('/\/\*\s([\s\S]+?)\*\//s', '', $docs_without_comments);
unset($docs_without_comments); // free memory

// remove excessive CRLFs
$properly_spaced_docs_without_comments = preg_replace('/[\r\n][\s\t\r\n]+[\r\n]/', PHP_EOL . PHP_EOL, $docs_without_doc_blocks);
unset($docs_without_doc_blocks); // free memory

// find all class definitions
$class_definitions = [];
$class_hash = [];
preg_match_all('/(?:class |interface |trait )((?:[A-Z][a-zA-Z]+_)*[A-Z][a-zA-Z]+)[^\{]+\{/',$properly_spaced_docs_without_comments,$class_definitions);
foreach($class_definitions[0] as &$definition)
{
	$local_definitions = [];
	preg_match_all('/((?:[A-Z][a-zA-Z]+_)*[A-Z][a-zA-Z]+)/',$definition,$local_definitions);
	foreach($local_definitions[1] as $local_definition)
	{
//		if(!isset($class_hash[$local_definition]))
//		{
			$class_hash[' '.$local_definition] = 0;
			$class_hash['|'.$local_definition] = 0;
//		}
//		$class_hash[$local_definition]++;
	}
}
unset($class_definitions,$local_definitions,$definition);
foreach($class_hash as $key => &$value)
{

	$trimmed = trim(get_namespaced_class_name($key, CD, NSD));
	$value = ($trimmed{0}=="|" ? '|'.NSD.substr($trimmed,1): NSD. $trimmed);
}
$class_hash = array_reverse($class_hash);
$class_hash_keys = array_keys($class_hash);

//delimit classes
$preg_replace = preg_replace(
	'/\}\n*(\/\*{2}(?:[\s\S]+?)\*\/)[^a-z]+(class|abstract\s+class|final\s+class|interface|trait)\s/si',
	"}\n" . CLASS_DELIMITER . "$1\n$2 ",
	trim($properly_spaced_docs_without_comments)
);
$classes      = explode(CLASS_DELIMITER, $preg_replace);
unset($properly_spaced_docs_without_comments); // free memory

$files = [];

foreach($classes as &$class)
{
	$class     = trim($class);
	$doc_class = [];
	preg_match('/(\/\*{2}([\s\S]+?)\*\/)(.+)/s', $class, $doc_class);

	$class_doc_block  = $doc_class[1];
	$class_definition = $doc_class[3];

	$class_definition_no_comments = preg_replace('/\/\*{2}([\s\S]+?)\*\//', '', $class);

	$class_names = get_class_names($class_definition_no_comments);
	$main_class  = $class_names[0];

	$namespaced_classes = [];
	$native_classes     = [];

	foreach($class_names as $class_name)
	{
		if(strpos($class_name, CD) === false)
		{
			$native_classes[' ' . $class_name] = ' ' . NSD . $class_name;
		}
		else
		{
			$namespaced_classes[$class_name] = NSD . get_namespaced_class_name($class_name, CD, NSD);
		}
	}

	$class = str_replace(array_keys($native_classes), $native_classes, $class);
	$class = str_replace(array_keys($namespaced_classes), $namespaced_classes, $class);
	$file  = get_namespaced_class_name($main_class, CD, DS);

	$namespace      = explode(DS, $file);
	$new_class_name = array_pop($namespace);
	$namespace_path = implode(NSD, $namespace);

	$class = str_replace($class_hash_keys,$class_hash,$class);
	$class = str_replace('class '.reset($namespaced_classes), 'class '.$new_class_name, $class);
	$class = str_replace('interface '.reset($namespaced_classes), 'interface '.$new_class_name, $class);

//	add_doc_blocks($class,NSD.$main_class);

//	$class = $class_doc_block . $class;
	$class = "namespace {$namespace_path} ;" . PHP_EOL . PHP_EOL . $class;


	$files[$file . '.php'] = $class;
}

foreach($files as $filename => $content)
{
	$dir_name = dirname($filename);
	if(!is_dir($dir_name))
	{
		mkdir($dir_name, 0777, true);
	}
	file_put_contents(__DIR__ . DS . $filename, '<?php' . PHP_EOL . $content);
}