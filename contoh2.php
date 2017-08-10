<?php
namespace Lama;

class Vario{
	public function index()
    {
		return 'Vario Lama';
	}
}

namespace Baru;

class Vario
{
	public function index()
    {
		return 'Vario Baru';
	}
}

$lama = new \Lama\Vario;
echo $lama->index();
echo '<br>';
$baru = new \Baru\Vario;
echo $baru->index();

?>