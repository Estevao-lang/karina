<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
 
        public function welcome()
{
    $depoimentos = [
        [
            'nome' => 'José Marcio',
            'mensagem' => 'Um lugar de conforto, onde eu me sinto seguro para abordar qualquer assunto...',
        ],
        [
            'nome' => 'Julia Maria',
            'mensagem' => 'Psicóloga atenciosa, comprometida e tem uma escuta onde me sinto acolhida.',
        ],
        [
            'nome' => 'Janaina Gabriel',
            'mensagem' => 'A psicóloga Karina demonstra domínio da teoria e aplica na prática conforme particularidades da paciente, sempre de forma sensível e no timing correto.',
        ],
        [
            'nome' => 'Nayara Müller',
            'mensagem' => 'Acolhedora, competente, sensível.',
        ],
        [
            'nome' => 'Nathan Oliveira',
            'mensagem' => 'Consegue me entender mesmo eu não sabendo me expressar muito bem, consegue me fazer refletir sobre comportamento sem fazer com que eu sinta culpa por certas atitudes ou falas, procura sempre me mostrar o lado positivo, seja uma fala ou uma atitude minha, sempre reforça a minha capacidade de superar os obstáculos.',
        ],
        [
            'nome' => 'Beatriz',
            'mensagem' => 'Uma das melhores psicólogas!',
        ],
        [
            'nome' => 'Carla Andrade',
            'mensagem' => 'A profissional tem compromisso de me ajudar e também aprender com minha história.',
        ],
        [
            'nome' => 'Vanessa',
            'mensagem' => 'Uma excelente profissional, confiança e também humana.',
        ],
        [
            'nome' => 'Isabela Berrantino',
            'mensagem' => 'Segurança, profissionalismo, tranquilidade.',
        ],
        [
            'nome' => 'Cassandra Marques',
            'mensagem' => 'Uma pessoa que é atenciosa, empática e transmite credibilidade nas ações e nas falas.',
        ],
        [
            'nome' => 'Marcia Santos',
            'mensagem' => 'Responsável e dedicada.',
        ],
        [
            'nome' => 'Carla',
            'mensagem' => 'Ótima profissional.',
        ],
        [
            'nome' => 'Maria Rosélia',
            'mensagem' => 'Profissional muito competente.',
        ],
        [
            'nome' => 'Pedro Victor',
            'mensagem' => 'Uma profissional empenhada no desenvolvimento do paciente, aberta a ouvir e acolher.',
        ],
        [
            'nome' => 'Nicole Furlani',
            'mensagem' => 'Excelente profissional!',
        ],
        [
            'nome' => 'Deiler Mattos',
            'mensagem' => 'A Karina é centrada, comunicativa, acolhedora e proativa.',
        ],
    ];



        return view('welcome', compact('depoimentos'));
    }
}
