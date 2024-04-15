<?php
require_once 'FabricadorConexoes.php';
require_once '../controller/ControllerAluno.php';
class Aluno
{
    public function Inserir()
    {
        try {
            $conexao = new Conexao();
            $conexao->__construct();

            $aluno = new ControllerAluno();
            $aluno->setNome($_POST['nome']);
            $aluno->setEmail($_POST['email']);
            $aluno->setSexo($_POST['sexo']);
            $aluno->setEndereco($_POST['endereco']);
            $aluno->setNumeroCasa($_POST['numeroCasa']);
            $aluno->setComplemento($_POST['complemento']);
            $aluno->setBairro($_POST['bairro']);
            $aluno->setCidade($_POST['cidade']);
            $aluno->setUF($_POST['uf']);
            $aluno->setModalidade($_POST['modalidade']);

            $sql = "INSERT INTO Aluno (nome, email, sexo, endereco, numeroCasa, complemento, bairro, cidade, uf, modalidade) VALUES (:nome, :email, :sexo, :endereco, :numeroCasa, :complemento, :bairro, :cidade, :uf, :modalidade)";
            $resultado = $conexao->preparar($sql);

            $nome = $aluno->getNome();
            $email = $aluno->getEmail();
            $sexo = $aluno->getSexo();
            $endereco = $aluno->getEndereco();
            $numeroCasa = $aluno->getNumeroCasa();
            $complemento = $aluno->getComplemento();
            $bairro = $aluno->getBairro();
            $cidade = $aluno->getCidade();
            $UF = $aluno->getUF();
            $modalidade = $aluno->getModalidade();

            $resultado->bindParam(':nome', $nome);
            $resultado->bindParam(':email', $email);
            $resultado->bindParam(':sexo', $sexo);
            $resultado->bindParam(':endereco', $endereco);
            $resultado->bindParam(':numeroCasa', $numeroCasa);
            $resultado->bindParam(':complemento', $complemento);
            $resultado->bindParam(':bairro', $bairro);
            $resultado->bindParam(':cidade', $cidade);
            $resultado->bindParam(':uf', $UF);
            $resultado->bindParam(':modalidade', $modalidade);

            $resultado->execute();
        } catch (\Throwable $th) {
            throw $th;
        } finally {
            $conexao = null;
        }
    }
    public function SelectTabela()
    {
        try {
            $conexao = new Conexao();
            $conexao->__construct();

            $sql = "SELECT * FROM aluno";
            $resultado = $conexao->preparar($sql);
            $resultado->execute();
        } catch (\Throwable $th) {
            throw $th;
        } finally {
            $conexao = null;
            return $resultado->fetchAll();
        }
    }
    public function SelectID($id)
    {
        try {
            $conexao = new Conexao();
            $conexao->__construct();

            $sql = "SELECT * FROM aluno where id = {$id}";
            $resultado = $conexao->preparar($sql);
            $resultado->execute();
        } catch (\Throwable $th) {
            throw $th;
        } finally {
            $conexao = null;
            return $resultado->fetchAll();
        }
    }
    public function Atualizar($id)
    {
        try {
            $conexao = new Conexao();
            $conexao->__construct();

            $aluno = new ControllerAluno();
            $aluno->setNome($_POST['nome']);
            $aluno->setEmail($_POST['email']);
            $aluno->setSexo($_POST['sexo']);
            $aluno->setEndereco($_POST['endereco']);
            $aluno->setNumeroCasa($_POST['numeroCasa']);
            $aluno->setComplemento($_POST['complemento']);
            $aluno->setBairro($_POST['bairro']);
            $aluno->setCidade($_POST['cidade']);
            $aluno->setUF($_POST['uf']);
            $aluno->setModalidade($_POST['modalidade']);
            
            $sql = "UPDATE Aluno SET nome = :nome, email = :email, sexo = :sexo, endereco = :endereco, numeroCasa = :numeroCasa, complemento = :complemento, bairro = :bairro, cidade = :cidade, uf = :uf, modalidade = :modalidade WHERE id = :id";
            $resultado = $conexao->preparar($sql);
            
            $nome = $aluno->getNome();
            $email = $aluno->getEmail();
            $sexo = $aluno->getSexo();
            $endereco = $aluno->getEndereco();
            $numeroCasa = $aluno->getNumeroCasa();
            $complemento = $aluno->getComplemento();
            $bairro = $aluno->getBairro();
            $cidade = $aluno->getCidade();
            $UF = $aluno->getUF();
            $modalidade = $aluno->getModalidade();

            $resultado->bindParam(':id', $id);
            $resultado->bindParam(':nome', $nome);
            $resultado->bindParam(':email', $email);
            $resultado->bindParam(':sexo', $sexo);
            $resultado->bindParam(':endereco', $endereco);
            $resultado->bindParam(':numeroCasa', $numeroCasa);
            $resultado->bindParam(':complemento', $complemento);
            $resultado->bindParam(':bairro', $bairro);
            $resultado->bindParam(':cidade', $cidade);
            $resultado->bindParam(':uf', $UF);
            $resultado->bindParam(':modalidade', $modalidade);

            $resultado->execute();
            return true;
        } catch (\Throwable $th) {
            throw new Exception($th);
        } finally {
            $conexao = null;
        }
    }
    public function Deletar($id)
    {
        try {
            $conexao = new Conexao();
            $conexao->__construct();

            $sql = "DELETE FROM Aluno WHERE id = :id";
            $resultado = $conexao->preparar($sql);

            $resultado->bindParam(':id', $id);

            $resultado->execute();
        } catch (\Throwable $th) {
            throw $th;
        } finally {
            $conexao = null;
        }
    }
}
