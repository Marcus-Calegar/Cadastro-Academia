<?php
require_once '../model/Aluno.php';
class ControllerAluno
{
    private $id;
    private $nome;
    private $email;
    private $sexo;
    private $endereco;
    private $numeroCasa;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $modalidade;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        if (!empty($nome) && strlen($nome) <= 150) {
            $this->nome = $nome;
        } else {
            throw new InvalidArgumentException("Nome inválido.");
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (!empty($email) && strlen($email) <= 100) {
            $this->email = $email;
        } else {
            throw new InvalidArgumentException("Email inválido.");
        }
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        if ($sexo === "Masculino" || $sexo === "Feminino" || $sexo === "Outro") {
            $this->sexo = $sexo;
        } else {
            throw new InvalidArgumentException("Sexo inválido. " . $sexo);
        }
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        if (strlen($endereco) <= 255) {
            $this->endereco = $endereco;
        } else {
            throw new InvalidArgumentException("Endereço inválido.");
        }
    }

    public function getNumeroCasa()
    {
        return $this->numeroCasa;
    }

    public function setNumeroCasa($numeroCasa)
    {
        if ($numeroCasa > 0) {
            $this->numeroCasa = $numeroCasa;
        } else {
            throw new InvalidArgumentException("Número da casa inválido.");
        }
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento($complemento)
    {
        if (strlen($complemento) <= 30) {
            $this->complemento = $complemento;
        } else {
            throw new InvalidArgumentException("Complemento inválido.");
        }
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        if (strlen($bairro) <= 50) {
            $this->bairro = $bairro;
        } else {
            throw new InvalidArgumentException("Bairro inválido.");
        }
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        if (strlen($cidade) <= 50) {
            $this->cidade = $cidade;
        } else {
            throw new InvalidArgumentException("Cidade inválida.");
        }
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        if (strlen($uf) === 2) {
            $this->uf = $uf;
        } else {
            throw new InvalidArgumentException("UF inválido. " . $uf);
        }
    }

    public function getModalidade()
    {
        return $this->modalidade;
    }

    public function setModalidade($modalidade)
    {
        if (!empty($modalidade) && strlen($modalidade) <= 50) {
            $this->modalidade = $modalidade;
        } else {
            throw new InvalidArgumentException("Modalidade inválida. " . $modalidade);
        }
    }
}
