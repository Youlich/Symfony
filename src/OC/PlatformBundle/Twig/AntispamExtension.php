<?php

namespace OC\PlatformBundle\Twig;

use OC\PlatformBundle\Antispam\OCAntispam;

//Ce petit service a comme mission d'être une extension Twig concernant le spam
class AntispamExtension extends \Twig_Extension
{
	/**
	 * @var OCAntispam
	 */

	private $ocAntispam;

	public function __construct(OCAntispam $ocAntispam)
	{
		$this->ocAntispam = $ocAntispam;
	}

	public function checkIfArgumentIsSpam($text)
	{
		return $this->ocAntispam->isSpam($text);
	}

	public function getFunctions()
	{
		return array(
			new \Twig_SimpleFunction('checkIfSpam', array($this, 'checkIfArgumentIsSpam')),
		);
	}

	// La méthode getName() identifie votre extension Twig, elle est obligatoire

	public function getName()
	{
		return 'OCAntispam';
	}
}