<?php 
use Yandex\Disk\DiskClient;class Cms56fd06f6103f8_957706366Class extends \Cms\Classes\PageCode
{
public function onInit()
{
    //$this->imageUploader->bindModel('files', Project::find(1));
    //new Project;
    #$this->imageUploader->bindModel('photoTest',new \Rainlab\User\Models\User);


    //var_dump($this->page);

//Auth::user->id
//echo '<pre>';
    //print_r(Auth::user->id);
       // echo '</pre>';
//die();


}
public function onStart()
{


/*
        $this['tmp'] = 'test.htm';

        

        require_once 'phar://yandex-php-library_master.phar/vendor/autoload.php';

        #define('ACCESS_TOKEN', 'bbbef0b0944e4ce79219ac5884cbbebc');
        define('ACCESS_TOKEN', 'b935155030af4a38b2ce7452fb1f2602');

        $user = Auth::getUser();

        $diskClient = new DiskClient(ACCESS_TOKEN);
        $diskClient->setServiceScheme(DiskClient::HTTPS_SCHEME);
        #$diskSpace = $diskClient->diskSpaceInfo();
        $path = $user->email;

        // Получаем список файлов из директории

        $dirContent = $diskClient->directoryContents('/'.$path);
        $files = $diskClient->directoryContents('/'.$path);

        foreach ($dirContent as $dirItem) {
        if ($dirItem['resourceType'] === 'dir') {
        echo 'Директория "' . $dirItem['displayName'] . '" была создана ' . date(
        'Y-m-d в H:i:s',
        strtotime($dirItem['creationDate'])
        ) . '<br />';
            } else {
            echo 'Файл "' . $dirItem['displayName'] . '" с размером в ' . $dirItem['contentLength'] . ' байт был создан ' . date(
            'Y-m-d в H:i:s',
            strtotime($dirItem['creationDate'])
            ) . '<br />';
            }
        }

*/

/*
                #$user = Auth::getUser();
                #echo $user;

                $file_array = file("message.txt");

                if(!$file_array)
                {
                    echo("Ошибка открытия файла");
                }
                else
                {
                    for($i=0; $i < count($file_array); $i++)
                    {
                        printf("%s<br>", $file_array[$i]);
                    }
                }
*/

}
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $this['answer'] = $value1 + $value2;
}

}
