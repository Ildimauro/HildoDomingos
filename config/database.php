<?php
/**
 * Classe Database - Gerenciamento de conexão com MySQL via PDO
 * Sistema Inteligente de Sugestão, Gestão e Geração de Temas e Trabalhos Académicos
 */

class Database {
    private static $instance = null;
    private $connection = null;
    private $statement = null;
    private $error = null;
    
    /**
     * Construtor privado - Singleton Pattern
     */
    private function __construct() {
        $this->connect();
    }
    
    /**
     * Obter instância única (Singleton)
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Conectar ao banco de dados
     */
    private function connect() {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ':' . DB_PORT . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
            ];
            
            $this->connection = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
            
            if (LOG_ENABLED) {
                error_log('[DATABASE] Conexão estabelecida com sucesso');
            }
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            if (SHOW_ERRORS) {
                die('Erro de conexão ao banco de dados: ' . $e->getMessage());
            } else {
                error_log('[DATABASE] Erro de conexão: ' . $e->getMessage());
                die('Erro de conexão ao banco de dados');
            }
        }
    }
    
    /**
     * Preparar uma query
     */
    public function prepare($sql) {
        try {
            $this->statement = $this->connection->prepare($sql);
            return $this;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            error_log('[DATABASE] Erro ao preparar query: ' . $e->getMessage());
            throw new Exception('Erro ao preparar query');
        }
    }
    
    /**
     * Bind de parâmetros
     */
    public function bind($param, $value, $type = PDO::PARAM_STR) {
        try {
            $this->statement->bindValue($param, $value, $type);
            return $this;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            error_log('[DATABASE] Erro ao fazer bind: ' . $e->getMessage());
            throw new Exception('Erro ao fazer bind de parâmetros');
        }
    }
    
    /**
     * Executar query preparada
     */
    public function execute() {
        try {
            return $this->statement->execute();
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            error_log('[DATABASE] Erro ao executar query: ' . $e->getMessage());
            throw new Exception('Erro ao executar query');
        }
    }
    
    /**
     * Obter um resultado
     */
    public function fetch() {
        return $this->statement->fetch();
    }
    
    /**
     * Obter todos os resultados
     */
    public function fetchAll() {
        return $this->statement->fetchAll();
    }
    
    /**
     * Contar linhas afetadas
     */
    public function rowCount() {
        return $this->statement->rowCount();
    }
    
    /**
     * Obter último ID inserido
     */
    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }
    
    /**
     * Iniciar transação
     */
    public function beginTransaction() {
        return $this->connection->beginTransaction();
    }
    
    /**
     * Confirmar transação
     */
    public function commit() {
        return $this->connection->commit();
    }
    
    /**
     * Desfazer transação
     */
    public function rollback() {
        return $this->connection->rollBack();
    }
    
    /**
     * Executar query direta (USE COM CUIDADO)
     */
    public function query($sql) {
        try {
            $this->statement = $this->connection->query($sql);
            return $this;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            error_log('[DATABASE] Erro ao executar query direta: ' . $e->getMessage());
            throw new Exception('Erro ao executar query');
        }
    }
    
    /**
     * Obter erro da última operação
     */
    public function getError() {
        return $this->error;
    }
    
    /**
     * Obter conexão PDO
     */
    public function getConnection() {
        return $this->connection;
    }
    
    /**
     * Fechar conexão
     */
    public function close() {
        $this->connection = null;
    }
}

?>