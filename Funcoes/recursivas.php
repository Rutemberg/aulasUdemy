<?php


$Hierarquia = array(
    array(
        "nome_cargo" => "CEO",
        "Subordinados" => array(
            array(
            "nome_cargo" => "Diretor comercial",
            "Subordinados" => array(
                array(
                "nome_cargo" => "Gerente de vendas",
                "Subordinados" => array(
                    array(
                    "nome_cargo" => "vendedor"
                )
                )
            )
            )
            ),
            array(
                "nome_cargo" => "Diretor financeiro",
                "Subordinados" => array(
                    array(
                    "nome_cargo" => "Gerente de finanças",
                    "Subordinados" => array(
                        array(
                        "nome_cargo" => "Supervisor financeiro"
                        )
                    )
                    ),
                    array(
                        "nome_cargo" => "Gerente de compras",
                        "Subordinados" => array(
                            array(
                                "nome_cargo" => "Supervisor de compras"
                            ),
                            array(
                                "nome_cargo" => "Supervisor"
                            )
                        )
                    ),
                    array(
                        "nome_cargo" => "Gerente de recursos"
                    )
                )
            )

        )

    )
);


function exibir($cargos)
{
$html = "<ul>";

foreach ($cargos as $cargo) {
    $html .= "<li>";
    $html .= $cargo['nome_cargo'];
    if(isset($cargo['Subordinados']) && count($cargo['Subordinados']) > 0)
    $html .= exibir($cargo['Subordinados']);
    $html .= "</li>";
}

$html .= "</ul>";

return $html;
}

echo exibir($Hierarquia)."<br>";
//var_dump($Hierarquia)

 ?>
