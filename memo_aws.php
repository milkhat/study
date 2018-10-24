<?php 

require 'vendor/autoload.php';/*
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3 = new Aws\S3\S3Client([
    'profile' => 'default',
    'region'  => MY_REGION,
    'version' => 'latest'
]);
*/
/*
全bucketをリスト表示する

$buckets = $s3->listBuckets();

foreach ($buckets['Buckets'] as $bucket) {
    echo $bucket['Name']."\n";
}
*/

/* バケット内のファイルをリスト表示する
try {
    $result = $s3->listObjects([
        'Bucket' => MY_BUCKET ,
        'Prefix'  => FOLDER_PATH
    ]);

    echo "Keys retrieved!" . PHP_EOL;
    foreach ($result['Contents'] as $object) {
        echo $object['Key'] . PHP_EOL;
    }
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
*/
