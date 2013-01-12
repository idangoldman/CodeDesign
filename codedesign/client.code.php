<?php
  
  // Client Class
  class Code {
    public static function Stylesheet (
      array $list = array(),
      $cache = NULL,
      $minify = NULL,
      $concat = NULL
    ) {
      echo (new File(
        Config::FileProperties('stylesheet', $list, array($cache, $minify, $concat))
      ));
    }
    
    public static function Javascript (
      array $list = array(),
      $cache = NULL,
      $minify = NULL,
      $concat = NULL
    ) {
      echo (new File(
        Config::FileProperties('javascript', $list, array($cache, $minify, $concat))
      ));
    }

    public static function Content () {
      echo "content";
      
      // if (!empty(self::$content_folder)) {
      //   Moo::Sandbox(
      //     $output = Library::Markdown(self::$content_folder.$path)
      //   );
      // } else {
      //   $output = "Missing Content Folder.";
      // }
      
      // echo $output;
    }

  }

?> 