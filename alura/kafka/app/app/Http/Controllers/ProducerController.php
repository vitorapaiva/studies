<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RdKafka\Conf as Conf;
use RdKafka\Producer as Producer;

class ProducerController extends Controller
{
    public function __invoke(Request $request)
    {
        $conf = new Conf();
        $conf->set('log_level', (string) LOG_DEBUG);
        $conf->set('debug', 'all');
        $rk = new Producer($conf);
        $rk->addBrokers("localhost");
        $topic = $rk->newTopic($request->topic);
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, $request->message);
        $rk->flush(1000);
    }
}
