--TEST--
Test map reduce input objects
--FILE--
<?php
include_once "connect.inc";
$client = new RiakClient($host, $port);
$bucket = new RiakBucket($client, "test_bucket");

$buckeetInput1 = new RiakMrInputBucket("bucket_name");
$val = $buckeetInput1->getValue();
$val = $buckeetInput1->getValue();
if ($val !== "bucket_name") {
    var_dump($buckeetInput1);
}

$obj = new RiakObject("object_key");

$obj2 = new RiakObject("object_key2");
$obj3 = new RiakObject("object_key3");

$keyDataList = new RiakMrInputKeyDataList();
$keyDataList->add("bucket","key1","data")
            ->add("bucket","key2","data")
            ->add("bucket","key3","data");
$val = $keyDataList->getValue();
if (count($val) !== 3) {
    var_dump($val);
}

$listInput = new RiakMrInputKeyList(array("bucket1" => array("key1", "key2", "key3")));
$listInput  ->addArray(array("bucket1" => array("key4", "key5")))
            ->addArray(array("bucket2" => array("0", "asdf")))
            ->addArray(array("bucket3" => $obj))
            ->addArray(array("bucket4" => array($obj2, $obj3)))
            ->addSingle("bucket5", "ost")
            ->addSingle("bucket6", "ost2")
            ->addSingle("bucket7", $obj)
            ->addSingle($bucket, $obj2);

$val = $listInput->getValue();

if (count($val) !== 14) {
    var_dump($val);
}
echo "done!";
?>
--EXPECT--
done!
