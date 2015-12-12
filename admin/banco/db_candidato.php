<?php

    require 'conexao.php';

    // Inserir Candidato
    function DBInsert_Candidato(array $candidato){
        $link = DBConnect();

        $query_inserir = "INSERT INTO candidato (idcandidato, nome, cpf, rua, num, bairro, cidade, cep, fixo, cel, email, curso1, curso2, datahora) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $link->prepare($query_inserir) or die (mysqli_error($link));

        if ($stmt) {
            $stmt->bind_param("sssissssssss", $candidato["nome"], $candidato["cpf"], $candidato["rua"], $candidato["num"], $candidato["bairro"], $candidato["cidade"], $candidato["cep"], $candidato["fixo"], $candidato["cel"], $candidato["email"], $candidato["opc1"], $candidato["opc2"]);
            $resultado = $stmt->execute() ? 1 : 0;
            $stmt->store_result();
            $stmt->close();
        }

        DBClose($link);
        return $resultado;
    }

    function DBSearch_ByCpf($cpf)
    {
        $link = DBConnect();

        $query_list = "SELECT * FROM candidato WHERE cpf='$cpf'";

        if ($result = $link->query($query_list)) {

            while ($row = $result->fetch_row()) {
                $candidato = array(
                    'id' => $row[0],
                    'nome' => $row[1],
                    'cpf' => $row[2],
                    'rua' => $row[3],
                    'num' => $row[4],
                    'bairro' => $row[5],
                    'cidade' => $row[6],
                    'cep' => $row[7],
                    'fixo' => $row[8],
                    'cel' => $row[9],
                    'email' => $row[10],
                    'opc1' => $row[11],
                    'opc2' => $row[12],
                    'datahora' => $row[13]
                );
                return $candidato;
            }
        }
    }