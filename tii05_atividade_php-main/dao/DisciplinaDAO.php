
Para integrar a visualização de uma disciplina e seus alunos diretamente na estrutura do código que você enviou, aqui vai uma implementação completa. Vou integrar o que já foi feito, mantendo o seu código e acrescentando a parte do frontend, fazendo tudo funcionar em uma única página.

Passo a passo para a implementação
Vou criar a parte do frontend diretamente dentro do código PHP usando HTML.
Vou reutilizar o método getDisciplinaWithAlunos que você precisará implementar no DisciplinaDAO conforme explicado anteriormente.
Vou ajustar a lógica para carregar a página dependendo da requisição GET.
Código Completo Integrado
Aqui está a página ajustada com a integração completa:

php
Copiar código
<?php
require_once 'BaseDAO.php';
require_once 'entity/Disciplina.php';
require_once 'entity/Aluno.php';
require_once 'entity/Professor.php';
require_once 'config/Database.php';

class DisciplinaDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM Disciplina WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return new Disciplina($row['id'], $row['nome'], $row['carga_horaria']);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Disciplina";
        $stmt = $this->db->query($sql);
        $disciplinas = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $disciplinas[] = new Disciplina($row['id'], $row['nome'], $row['carga_horaria']);
        }
        return $disciplinas;
    }

    public function create($disciplina)
    {
        $sql = "INSERT INTO Disciplina (nome, chave, carga_horaria) VALUES (:nome, :chave, :carga_horaria)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome', $disciplina->getNome());
        $stmt->bindParam(':chave', $disciplina->getChave());
        $stmt->bindParam(':carga_horaria', $disciplina->getCargaHoraria());
        $stmt->execute();
    }

    public function update($disciplina)
    {
        $sql = "UPDATE Disciplina SET nome = :nome, chave = :chave, carga_horaria = :carga_horaria WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome', $disciplina->getNome());
        $stmt->bindParam(':chave', $disciplina->getChave());
        $stmt->bindParam(':carga_horaria', $disciplina->getCargaHoraria());
        $stmt->bindParam(':id', $disciplina->getId());
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Disciplina WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Método para obter disciplina com seus alunos
    public function getDisciplinaWithAlunos($disciplinaID)
    {
        // Obter a disciplina pelo ID
        $sqlDisciplina = "SELECT * FROM Disciplina WHERE id = :disciplinaID";
        $stmtDisciplina = $this->db->prepare($sqlDisciplina);
        $stmtDisciplina->bindParam(':disciplinaID', $disciplinaID);
        $stmtDisciplina->execute();
        $rowDisciplina = $stmtDisciplina->fetch(PDO::FETCH_ASSOC);

        // Se a disciplina não for encontrada, retorne null
        if (!$rowDisciplina) {
            return null;
        }

        // Criar um objeto Disciplina
        $disciplina = new Disciplina($rowDisciplina['id'], $rowDisciplina['nome'], $rowDisciplina['carga_horaria']);

        // Obter os alunos associados à disciplina
        $sqlAlunos = "SELECT * FROM Aluno WHERE disciplina_id = :disciplinaID";
        $stmtAlunos = $this->db->prepare($sqlAlunos);
        $stmtAlunos->bindParam(':disciplinaID', $disciplinaID);
        $stmtAlunos->execute();

        // Criar uma lista de alunos
        $alunos = [];
        while ($rowAluno = $stmtAlunos->fetch(PDO::FETCH_ASSOC)) {
            $alunos[] = new Aluno($rowAluno['id'], $rowAluno['nome'], $rowAluno['disciplina_id']);
        }

        // Adicionar a lista de alunos ao objeto Disciplina
        $disciplina->setAlunos($alunos);

        return $disciplina;
    }

    // Método para obter os professores da disciplina
    public function getProfessoresForDisciplina($disciplinaID)
    {
        $sql = "SELECT p.id, p.nome, p.disciplina_id FROM professor p
            WHERE p.disciplina_id = :disciplinaID";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':disciplinaID', $disciplinaID);
        $stmt->execute();

        $professores = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $professores[] = new Professor($row['id'], $row['nome'], $row['disciplina_id']);
        }

        return $professores;
    }
}
