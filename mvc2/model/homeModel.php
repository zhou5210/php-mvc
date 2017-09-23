<?php
/**
 * 
 * @copyright   Copyright(c) 2017
 * @author      zk
 * @version     1.0
 */
class homeModel extends Model{
        function test(){
                echo "this is test homeModel";
        }
        
        function testResult(){
                $this->db->show_databases();
        }
}


