<?php 

require_once('vendor/autoload.php');

use NeuronAI\Agent;
use NeuronAI\Chat\Messages\UserMessage;
use NeuronAI\Providers\AIProviderInterface;
use NeuronAI\Providers\Gemini\Gemini;

class MyAgent extends Agent
{
    protected function provider(): AIProviderInterface
    {
        return new Gemini(
            key: 'PASTE_YOUR_API_KEY',
            model: 'gemini-2.0-flash',
        );
    }
}

$response = MyAgent::make()->chat(new UserMessage("Hi!"));

print_r($response);

echo "<br/><br/>";

var_dump($response);