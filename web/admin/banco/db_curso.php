<?php

    require 'conexao.php';

    // Inserir Curso
    function DBInsert_Curso(array $curso, $foto1, $foto2, $foto3){
        $link = DBConnect();

        $query_curso = "INSERT INTO curso (idcurso, cod, nome, duracao, periodo, mensalidade, descricao, foto1, foto2, foto3) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $link->prepare($query_curso) or die (mysqli_error($link));

        if ($stmt) {
            $stmt->bind_param("ssissssss", $curso["cod"], $curso["nome"], $curso["duracao"], $curso["periodo"], $curso["mensalidade"], $curso["descricao"], $foto1, $foto2, $foto3);
            $resultado = $stmt->execute() ? 1 : 0;
            $stmt->store_result();
            $stmt->close();
        }

        DBClose($link);
        return $resultado;
    }


