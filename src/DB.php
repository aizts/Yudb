<?php

namespace Yudb;

use PDO;
use Exception;
use PDOException;
use InvalidArgumentException;

class Tool
{
    public static function WipeOffBlank($str)
    {
        if (empty($str) && $str != 0) return '';
        $str = str_replace(' ', '', $str);
        $str = str_replace('　', '', $str);
        return $str;
    }
}

class DB
{

    public $_mdb;

    protected $_dbms = 'mysql'; //数据库类型

    protected $_host = '127.0.0.1'; //主机地址

    protected $_port = '3306'; //端口

    protected $_dbname = 'test'; //使用的数据库

    protected $_user = 'root'; //数据库连接用户名

    protected $_password = 'root'; //对应的密码

    public function __construct(array $config = [])
    {
        //数据库类型
        if (isset($config['dbms'])) {
            $this->_dbms = Tool::WipeOffBlank($config['dbms']);
        }
        //主机地址
        if (isset($config['host'])) {
            $this->_host = Tool::WipeOffBlank($config['host']);
        }
        //端口
        if (isset($config['port'])) {
            $this->_port = Tool::WipeOffBlank($config['port']);
        }
        //数据库
        if (isset($config['dbname'])) {
            $this->_dbname = Tool::WipeOffBlank($config['dbname']);
        }
        //账号
        if (isset($config['user'])) {
            $this->_user = Tool::WipeOffBlank($config['user']);
        }
        //密码
        if (isset($config['password'])) {
            $this->_password = Tool::WipeOffBlank($config['password']);
        }

        try {
            $dsn = "{$this -> _dbms}:host={$this -> _host};port={$this -> _port};dbname={$this -> _dbname}";
            $dbh = new PDO($dsn, $this->_user, $this->_password);
            $this -> _mdb = $dbh;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }

    }

    /**
     * 设置表名
     * @Desc:
     * @author: ly
     * @Time: 2023-1-12 16:07
     */
    public function setTable()
    {

    }

    //FIXME 增----------------------------------------------------------------------------------

    public function insert($in_data)
    {

    }

    //FIXME 删----------------------------------------------------------------------------------

    public function delete($in_data)
    {

    }

    //FIXME 改----------------------------------------------------------------------------------

    public function update($in_data)
    {

    }

    //FIXME 查----------------------------------------------------------------------------------

    public function select()
    {

    }


}