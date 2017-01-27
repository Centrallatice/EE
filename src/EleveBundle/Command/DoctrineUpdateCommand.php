<?php
namespace EleveBundle\Command;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\Tools\SchemaTool;

class DoctrineUpdateCommand extends \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand {

  protected $ignoredEntities = array(
      'EleveBundle\Entity\EntityCulture\Eleve',
      'EleveBundle\Entity\EntityMain\Courrieretatlecture',
      'EleveBundle\Entity\EntityMain\Courriertype',
  );

  protected function executeSchemaCommand(InputInterface $input, OutputInterface $output, SchemaTool $schemaTool, array $metadatas) {

    /** @var $metadata \Doctrine\ORM\Mapping\ClassMetadata */
    $newMetadatas = array();
    foreach ($metadatas as $metadata) {
      if (!in_array($metadata->getName(), $this->ignoredEntities)) {
        array_push($newMetadatas, $metadata);
      }
    }

    parent::executeSchemaCommand($input, $output, $schemaTool, $newMetadatas);
  }

}
