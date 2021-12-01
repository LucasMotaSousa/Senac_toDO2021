<?php

    use \App\Models\ModelPrioridade as Prioridade;
    use \App\Models\ModelStatus as Status;
    use \App\Models\ModelCategoria as Categoria;
    use \App\Models\ModelTarefa as Tarefa;

    if(!function_exists('diaSemana'))
    {

        function diaSemana($data)
        {
            $new_data = Datetime::createFromFormat('Y-m-d', $data);
            $dia_semana = $new_data->format('w');
            switch ($dia_semana) {
                case '0':
                    return "Domingo";
                case '1':
                    return "Segunda-Feira";
                case '2':
                    return "Terça-Feira";
                case '3':
                    return "Quarta-Feira";
                case '4':
                    return "Quinta-Feira";
                case '5':
                    return "Sexta-Feira";
                case '6':
                    return "Sábado";
            }
        }
    }

    if(!function_exists('saldar'))
    {
        function saldar($data_teste)
        {
            $data = Datetime::createFromFormat('Y-m-d',$data_teste);
            $hora = (int)$data->format('H');
            if($hora < 6)
            {
                return "Boa Madrugada!";
            } elseif ($hora < 12)
            {
                return "Bom dia!";
            } elseif ($hora < 18)
            {
                return "Boa Tarde!";
            } else
            {
                return "Boa Noite!";
            }
        }
    }

    if(!function_exists('formataData'))
    {
        function formataData(String $data)
        {
            if(is_string($data))
            {
                if($data != '')
                {
                    $new_data = DateTime::createFromFormat('Y-m-d', $data);
                } else
                {
                    $new_data = new DateTime;
                }
            }
            return $new_data->format('d/m/Y');
        }
    }

    if(!function_exists('formataDataBd'))
    {
        function formataDataBd(String $data)
        {
            if(is_string($data))
            {
                if($data != '')
                {
                    $new_data = DateTime::createFromFormat('Y-m-d', $data);
                } else
                {
                    return;
                }
            }
            return $new_data->format('d/m/Y');
        }
    }

    if(!function_exists('exibe_data'))
    {
        function exibe_data($data = '')
        {
            echo 'Hoje: '.diaSemana($data).', '.formataData($data).' '.saldar($data);
        }
    }

    if(!function_exists('traduzPrioridade'))
    {
        function traduzPrioridade(int $id)
        {
            $prioridade = new Prioridade();
            return $prioridade->get_prioridade($id);
        }
    }

    if(!function_exists('traduzStatus'))
    {
        function traduzStatus(int $id)
        {
            $status = new Status();
            return $status->get_status($id);
        }
    }

    if(!function_exists('traduzCategoria'))
    {
        function traduzCategoria(int $id)
        {
            $categoria = new Categoria();
            return $categoria->get_categoria($id);
        }
    }

    if(!function_exists('traduzConcluida'))
    {
        function traduzConcluida(int $id)
        {
            $tarefa = new Tarefa();
            return $tarefa->get_concluida($id);
        }
    }