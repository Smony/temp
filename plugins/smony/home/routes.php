<?php
    use Yandex\Disk\DiskClient;

    require_once 'phar://yandex-php-library_master.phar/vendor/autoload.php';

    Route::match(['get', 'post'], 'upload', function () {

    #UPLOAD FILES ALL FOR YANDEX DISK




            $user = Auth::getUser();
                #define('ACCESS_TOKEN', 'bbbef0b0944e4ce79219ac5884cbbebc');
                define('ACCESS_TOKEN', 'b935155030af4a38b2ce7452fb1f2602');

                $diskClient = new DiskClient(ACCESS_TOKEN);
                $diskClient->setServiceScheme(DiskClient::HTTPS_SCHEME);
                #$diskSpace = $diskClient->diskSpaceInfo();
                $path = $user->email;

            #SAVE TO MESSAGE.TXT
            /*
                $file = fopen ("message.txt","r+");
                $str = "12";

                if ( !$file )
                {
                    echo("Ошибка открытия файла");
                }
                else
                {
                    fputs ( $file, $str);
                }
                fclose ($file);
            */
            #ENDSAVE

                if (!empty($_FILES)) {


                    #$message = "message.txt";
                    #$messageNew = "message_new.txt";

                    $tempFile = $_FILES['file']['tmp_name'];

                    $diskClient->uploadFile(
                        '/' . $path . '/',
                        array(
                            'path' => $tempFile,
                            'size' => filesize($tempFile),
                            'name' => time() . '-' . $_FILES['file']['name']
                        )
                    );
                /*
                    $diskClient->uploadFile(
                        '/' . $path . '/',
                        array(
                            'path' => $message,
                            'size' => filesize($message),
                            'name' => $messageNew
                        )
                    );
                */
                }


    #UPLOAD FILES FOR FOLDER
/*
    $user = Auth::getUser();

    $storeFolder = '../../../uploads' . '/' . $user->id;

    $tempFile = $_FILES['file']['tmp_name'];
    #Log::info(var_export($_FILES, true));
    $targetPath = dirname(__FILE__) . '/' . $storeFolder;


    if (!file_exists($targetPath)) {
        mkdir($targetPath, 0777);
    }

    $targetFile =  $targetPath . '/' . time() . '-' . $_FILES['file']['name'];
    move_uploaded_file($tempFile,$targetFile);
*/
    });


