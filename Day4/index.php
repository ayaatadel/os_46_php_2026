<?PHP 
/**
 *  PATH 
 *   ---------
 *     __FILE__  || pathinfo || basename ()
 * 
 * __FILE__ : D:\2025-2026\OpenSource\PHP\Day4\index.php
 *   FILE EXIST
 */

// echo __FILE__ ,"<br>";  // all path of file + extension
// echo basename(__FILE__),"<br>";  // name of file + ext
// echo pathinfo(__FILE__,PATHINFO_FILENAME),"<br>"; // name
// echo pathinfo(__FILE__,PATHINFO_EXTENSION),"<br>"; // extension
// echo pathinfo(__FILE__,PATHINFO_DIRNAME),"<br>"; // path direcory of file


// touch ("data.txt");  // create
// unlink("data.txt") // remove file


//=========== Folder (directory)

// echo __DIR__ , "<br>";
// // D:\2025-2026\OpenSource\PHP\Day4
// // ../ ../ (./ (current path) || ../ (step back))

// echo dirname(__DIR__,3) , "<br>";  // path + n.steps


// create directory 
// rmdir("images");
// mkdir("assets");
// mkdir("assets/images");
// @mkdir("assets") or die("flder already exist");

// =========== Chek of folder 
// if(is_dir("assets/video"))
//     {
//         echo "folder already exist";
//         exit;
//     }else{
//         mkdir("assets/video");
//         exit;
//     }
// =========== Chek of folder 
// if(is_file("agenda.txt"))
//     {
//         echo "file already exist";
//         exit;
//     }else{
//         touch("agenda.txt");
//         exit;
//     }



// Data in file
/**
 * store data
 * get data 
 * read data 
 */


// store data  
// file exist or not 

// read : only read data
// write : write data ===> exit data ==> remove exist data + store new data
// append : save old data + add new data

// === file_put_contents
///  ========> file not exist => create ====> mode write 

// file_put_contents("data.txt","Day4 PHP");
// // file_put_contents("data.txt","\n track open source \n ");

// file_put_contents("data.txt","\n track open source \n ",FILE_APPEND);



// // DAY 4   OPEN SOURCE  PHP 

// file_put_contents("data.txt","\n INTAKE 46 \n ",FILE_APPEND|LOCK_EX);


// READ CONTENT OF FILE

// echo file_get_contents("data.txt");

/// 
// if(is_writable("data.txt"))
//     {
//         file_put_contents("data.txt","\n INTAKE 46 \n ",FILE_APPEND|LOCK_EX);

//     }
//     else {
//         echo "this is read file only";
//     }


// read data line by line 




/// fread , frwite , fopen , fclose

// check file is exist or not

if(file_exists("data.txt"))
    {
    //    echo file_get_contents("data.txt"); 
        
    $myfile=fopen("data.txt","a+"); // resource file
    // echo gettype($myfile);


//  get size of file
$fileSize=filesize("data.txt");
echo $fileSize ."<br>";
if($fileSize>0)
    {
        fwrite($myfile,"\n hello");
        // echo "new size",$fileSize;
        $fileSize=filesize("data.txt");
        // fseek($myfile,0);
        rewind($myfile);
        echo fread($myfile,$fileSize);

    //    echo fread($myfile,$fileSize);
    }

    }else{

        echo "file not exist";
    }




?>