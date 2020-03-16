<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller
{

  public function __construct() 
  {
    parent::__construct();
    if (!$this->input->is_cli_request())
    {
      show_error('You don\'t havce permission for this action.');
      return;
    }
    $this->load->library('migration');
  }

  public function version($version)
  {
    $migration = $this->migration->version($version);
    if ($migration) 
    {
      echo $this->migration->error_string();
    } else {
      echo 'Migration done.' . PHP_EOL;
    }
  }

  public function generate($name = false) 
  {
    if (!$name)
    {
      echo 'Please define migration name'. PHP_EOL;
      return;
    }

    if (!preg_match('/^[a-z_]+$/i', $name))
    {
      if(strlen($name) < 4) 
      {
        echo 'Migration must be at least4 characters long'. PHP_EOL;
        return;
      }
      echo 'Wrong migration name, allowed characters: a-z and _\nExample: first_migration'. PHP_EOL;
      return;
    }
    $filename = date('YmdHis') . '_' . $name . '.php';
    try{
      $folderPath = APPPATH . 'migrations';
      if (!is_dir($folderPath)) 
      {
        try {
          mkdir($folderPath);
        }catch(Exception $e) 
        {
          echo "Error:\n".$e->getMessage(). PHP_EOL;
        }
      }
      $filePath = APPPATH . 'migrations/' . $filename;
      if (file_exists($filePath)) 
      {
        echo "File already exists:\n" . $filePath . PHP_EOL;
        return;
      }
      $data['className']  = ucfirst($name);
      $data['tableName']  = str_replace('_migration', '', $name);
      $template = $this->load->view('cli/migrations/migration_class_template', $data, TRUE);
      try{
        $file = fopen($filePath, 'w');
        $content = "<?php \n".$template;
        fwrite($file, $content);
        fclose($file);
      }catch(Exception $e)
      {
        echo "Error:\n" . $e->getMessage() . PHP_EOL;
      }
      echo "Migration created successfully:\nLocation: ".$filePath . PHP_EOL;
    }catch(Exception $e){
      echo "Can't create migration file:\nError: ". $e->getMessage() . PHP_EOL;
    }
  }

}