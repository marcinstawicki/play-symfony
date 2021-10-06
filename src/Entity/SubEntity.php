<?php

namespace App\Entity;

use App\Repository\SubEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubEntityRepository::class)
 */
class SubEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $doctrineStringPhpStringFormText1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $doctrineStringPhpStringFormText2;

    /**
     * @ORM\ManyToOne(targetEntity=MainEntity::class, inversedBy="doctrineOneToManyRelationPhpObjectFormEntity")
     */
    private $doctrineManyToOneRelationPhpObjectMainEntity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoctrineStringPhpStringFormText1(): ?string
    {
        return $this->doctrineStringPhpStringFormText1;
    }

    public function setDoctrineStringPhpStringFormText1(string $doctrineStringPhpStringFormText1): self
    {
        $this->doctrineStringPhpStringFormText1 = $doctrineStringPhpStringFormText1;

        return $this;
    }

    public function getDoctrineStringPhpStringFormText2(): ?string
    {
        return $this->doctrineStringPhpStringFormText2;
    }

    public function setDoctrineStringPhpStringFormText2(string $doctrineStringPhpStringFormText2): self
    {
        $this->doctrineStringPhpStringFormText2 = $doctrineStringPhpStringFormText2;

        return $this;
    }

    public function getDoctrineManyToOneRelationPhpObjectMainEntity(): ?MainEntity
    {
        return $this->doctrineManyToOneRelationPhpObjectMainEntity;
    }

    public function setDoctrineManyToOneRelationPhpObjectMainEntity(?MainEntity $doctrineManyToOneRelationPhpObjectMainEntity): self
    {
        $this->doctrineManyToOneRelationPhpObjectMainEntity = $doctrineManyToOneRelationPhpObjectMainEntity;

        return $this;
    }
}
