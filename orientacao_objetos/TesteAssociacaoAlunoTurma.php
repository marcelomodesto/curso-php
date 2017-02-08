<?php

require_once 'Aluno.php';
require_once 'Turma.php';

$aluno = new Aluno;
$aluno->nome="Rafael Cosentino";
$aluno->rg="2222222-2";
$aluno->dataNascimento = "30/10/1984";

$turma = new Turma;
$turma->periodo="Manha";
$turma->serie=5;
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";

$aluno->turma = $turma;

echo "### Aluno - Turma ###";
echo "Nome: $aluno->nome - RG: $aluno->rg - Data de Nascimento: $aluno->dataNascimento".PHP_EOL;
echo "Período: {$aluno->turma->periodo} - Série: {$aluno->turma->serie} - Sigla: {$aluno->turma->sigla} - Tipo de Ensino: {$aluno->turma->tipoDeEnsino}".PHP_EOL;

?>
