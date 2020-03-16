defined('BASEPATH') OR exit('No direct script access allowed');

class <?= 'Migration_'.$className ?> extends CI_Controller
{
  public function up()
  {
    $this->dbforge->add_field(
      array(
        'id' => array(
          'type' => 'INT',
          'unsigned' => TRUE,
          'auto_increment' => TRUE
        )
      )
    );

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('<?= $tableName ?>');
  }

  public function down()
  {
    $this->dbforge->drop_table('<?= $tableName ?>');
  }
}