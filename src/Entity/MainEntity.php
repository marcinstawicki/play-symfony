<?php

namespace App\Entity;

use App\Repository\SubEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as MyAssert;

/**
 * @ORM\Entity(repositoryClass=MainEntityRepository::class)
 */
class MainEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doctrineStringPhpStringFormText;

    /**
     * @ORM\Column(type="text")
     */
    private $doctrineTextPhpStringFormTextarea;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $doctrineStringPhpStringFormEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doctrineStringPhpStringFormUrl;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $doctrineStringPhpStringFormTel;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $doctrineStringPhpStringFormColor;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $doctrineStringPhpStringFormPassword;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $doctrineStringPhpStringFormSearch;

    /**
     * @ORM\Column(type="smallint")
     */
    private $doctrineSmallintPhpIntegerFormInteger;

    /**
     * @ORM\Column(type="integer")
     */
    private $doctrineIntegerPhpIntegerFormInteger;

    /**
     * @ORM\Column(type="bigint")
     */
    private $doctrineBigintPhpStringFormInteger;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $doctrineDecimalPhpStringFormNumber;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $doctrineDecimalPhpStringMoney;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2)
     */
    private $doctrineDecimalPhpStringFormPercent;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $doctrineStringPhpStringFormCountry;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $doctrineStringPhpStringFormLanguage;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $doctrineStringPhpStringFormLocale;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $doctrineStringPhpStringFormTimezone;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $doctrineStringPhpStringFormCurrency;

    /**
     * @ORM\Column(type="smallint")
     */
    private $doctrineSmallintPhpIntegerFormChoice;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $doctrineSimpleArrayPhpArrayFormChoice = [];

    /**
     * @ORM\Column(type="array")
     */
    private $doctrineArrayPhpArrayFormChoice = [];

    /**
     * @ORM\Column(type="json")
     */
    private $doctrineJsonPhpArrayFormChoice = [];

    /**
     * @ORM\Column(type="object")
     */
    private $doctrineObjectPhpObjectFormChoice;

    /**
     * @ORM\Column(type="date")
     */
    private $doctrineDatePhpDateTimeFormDate;

    /**
     * @ORM\Column(type="time")
     */
    private $doctrineTimePhpDateTimeFormTime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $doctrineDateTimePhpDateTimeFormDateTime;

    /**
     * @ORM\Column(type="date")
     */
    private $doctrineDatePhpDateTimeFormBirthday;

    /**
     * @ORM\Column(type="dateinterval")
     */
    private $doctrineDateIntervalPhpDateIntervalFormDateInterval;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $doctrineDateTimeImmutablePhpDateTimeFormDateTime;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $doctrineStringPhpStringFormWeek;

    /**
     * @ORM\Column(type="smallint")
     */
    private $doctrineSmallintPhpIntegerFormRange;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank
     * @MyAssert\Enabled
     */
    private $doctrineBooleanPhpBooleanFormCheckbox;

    /**
     * @ORM\Column(type="smallint")
     */
    private $doctrineSmallintPhpIntegerFormRadio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doctrineStringPhpStringFormFile;

    /**
     * @ORM\Column(type="float")
     */
    private $doctrineFloatPhpDoubleFormNumber;

    /**
     * @ORM\Column(type="guid")
     */
    private $doctrineGuidPhpStringFormUuid;

    /**
     * @ORM\Column(type="blob")
     */
    private $doctrineBlobPhpResourceFormChoice;

    /**
     * @ORM\OneToMany(targetEntity=SubEntity::class, mappedBy="doctrineManyToOneRelationPhpObjectMainEntity")
     */
    private $doctrineOneToManyRelationPhpObjectFormEntity;

    /**
     * @ORM\OneToOne(targetEntity=SubEntity::class, cascade={"persist", "remove"})
     */
    private $doctrineOneToOneRelationPhpObjectFormEntity;

    /**
     * @ORM\Column(type="json")
     */
    private $doctrineJsonPhpArrayFormCollection = [];

    public function __construct()
    {
        $this->doctrineOneToManyRelationPhpObjectFormEntity = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoctrineStringPhpStringFormText(): ?string
    {
        return $this->doctrineStringPhpStringFormText;
    }

    public function setDoctrineStringPhpStringFormText(string $doctrineStringPhpStringFormText): self
    {
        $this->doctrineStringPhpStringFormText = $doctrineStringPhpStringFormText;

        return $this;
    }

    public function getDoctrineTextPhpStringFormTextarea(): ?string
    {
        return $this->doctrineTextPhpStringFormTextarea;
    }

    public function setDoctrineTextPhpStringFormTextarea(string $doctrineTextPhpStringFormTextarea): self
    {
        $this->doctrineTextPhpStringFormTextarea = $doctrineTextPhpStringFormTextarea;

        return $this;
    }

    public function getDoctrineStringPhpStringFormEmail(): ?string
    {
        return $this->doctrineStringPhpStringFormEmail;
    }

    public function setDoctrineStringPhpStringFormEmail(string $doctrineStringPhpStringFormEmail): self
    {
        $this->doctrineStringPhpStringFormEmail = $doctrineStringPhpStringFormEmail;

        return $this;
    }

    public function getDoctrineStringPhpStringFormUrl(): ?string
    {
        return $this->doctrineStringPhpStringFormUrl;
    }

    public function setDoctrineStringPhpStringFormUrl(string $doctrineStringPhpStringFormUrl): self
    {
        $this->doctrineStringPhpStringFormUrl = $doctrineStringPhpStringFormUrl;

        return $this;
    }

    public function getDoctrineStringPhpStringFormTel(): ?string
    {
        return $this->doctrineStringPhpStringFormTel;
    }

    public function setDoctrineStringPhpStringFormTel(string $doctrineStringPhpStringFormTel): self
    {
        $this->doctrineStringPhpStringFormTel = $doctrineStringPhpStringFormTel;

        return $this;
    }

    public function getDoctrineStringPhpStringFormColor(): ?string
    {
        return $this->doctrineStringPhpStringFormColor;
    }

    public function setDoctrineStringPhpStringFormColor(string $doctrineStringPhpStringFormColor): self
    {
        $this->doctrineStringPhpStringFormColor = $doctrineStringPhpStringFormColor;

        return $this;
    }

    public function getDoctrineStringPhpStringFormPassword(): ?string
    {
        return $this->doctrineStringPhpStringFormPassword;
    }

    public function setDoctrineStringPhpStringFormPassword(string $doctrineStringPhpStringFormPassword): self
    {
        $this->doctrineStringPhpStringFormPassword = $doctrineStringPhpStringFormPassword;

        return $this;
    }

    public function getDoctrineStringPhpStringFormSearch(): ?string
    {
        return $this->doctrineStringPhpStringFormSearch;
    }

    public function setDoctrineStringPhpStringFormSearch(string $doctrineStringPhpStringFormSearch): self
    {
        $this->doctrineStringPhpStringFormSearch = $doctrineStringPhpStringFormSearch;

        return $this;
    }

    public function getDoctrineSmallintPhpIntegerFormInteger(): ?int
    {
        return $this->doctrineSmallintPhpIntegerFormInteger;
    }

    public function setDoctrineSmallintPhpIntegerFormInteger(int $doctrineSmallintPhpIntegerFormInteger): self
    {
        $this->doctrineSmallintPhpIntegerFormInteger = $doctrineSmallintPhpIntegerFormInteger;

        return $this;
    }

    public function getDoctrineIntegerPhpIntegerFormInteger(): ?int
    {
        return $this->doctrineIntegerPhpIntegerFormInteger;
    }

    public function setDoctrineIntegerPhpIntegerFormInteger(int $doctrineIntegerPhpIntegerFormInteger): self
    {
        $this->doctrineIntegerPhpIntegerFormInteger = $doctrineIntegerPhpIntegerFormInteger;

        return $this;
    }

    public function getDoctrineBigintPhpStringFormInteger(): ?string
    {
        return $this->doctrineBigintPhpStringFormInteger;
    }

    public function setDoctrineBigintPhpStringFormInteger(string $doctrineBigintPhpStringFormInteger): self
    {
        $this->doctrineBigintPhpStringFormInteger = $doctrineBigintPhpStringFormInteger;

        return $this;
    }

    public function getDoctrineDecimalPhpStringFormNumber(): ?string
    {
        return $this->doctrineDecimalPhpStringFormNumber;
    }

    public function setDoctrineDecimalPhpStringFormNumber(string $doctrineDecimalPhpStringFormNumber): self
    {
        $this->doctrineDecimalPhpStringFormNumber = $doctrineDecimalPhpStringFormNumber;

        return $this;
    }

    public function getDoctrineDecimalPhpStringMoney(): ?string
    {
        return $this->doctrineDecimalPhpStringMoney;
    }

    public function setDoctrineDecimalPhpStringMoney(string $doctrineDecimalPhpStringMoney): self
    {
        $this->doctrineDecimalPhpStringMoney = $doctrineDecimalPhpStringMoney;

        return $this;
    }

    public function getDoctrineDecimalPhpStringFormPercent(): ?string
    {
        return $this->doctrineDecimalPhpStringFormPercent;
    }

    public function setDoctrineDecimalPhpStringFormPercent(string $doctrineDecimalPhpStringFormPercent): self
    {
        $this->doctrineDecimalPhpStringFormPercent = $doctrineDecimalPhpStringFormPercent;

        return $this;
    }

    public function getDoctrineStringPhpStringFormCountry(): ?string
    {
        return $this->doctrineStringPhpStringFormCountry;
    }

    public function setDoctrineStringPhpStringFormCountry(string $doctrineStringPhpStringFormCountry): self
    {
        $this->doctrineStringPhpStringFormCountry = $doctrineStringPhpStringFormCountry;

        return $this;
    }

    public function getDoctrineStringPhpStringFormLanguage(): ?string
    {
        return $this->doctrineStringPhpStringFormLanguage;
    }

    public function setDoctrineStringPhpStringFormLanguage(string $doctrineStringPhpStringFormLanguage): self
    {
        $this->doctrineStringPhpStringFormLanguage = $doctrineStringPhpStringFormLanguage;

        return $this;
    }

    public function getDoctrineStringPhpStringFormLocale(): ?string
    {
        return $this->doctrineStringPhpStringFormLocale;
    }

    public function setDoctrineStringPhpStringFormLocale(string $doctrineStringPhpStringFormLocale): self
    {
        $this->doctrineStringPhpStringFormLocale = $doctrineStringPhpStringFormLocale;

        return $this;
    }

    public function getDoctrineStringPhpStringFormTimezone(): ?string
    {
        return $this->doctrineStringPhpStringFormTimezone;
    }

    public function setDoctrineStringPhpStringFormTimezone(string $doctrineStringPhpStringFormTimezone): self
    {
        $this->doctrineStringPhpStringFormTimezone = $doctrineStringPhpStringFormTimezone;

        return $this;
    }

    public function getDoctrineStringPhpStringFormCurrency(): ?string
    {
        return $this->doctrineStringPhpStringFormCurrency;
    }

    public function setDoctrineStringPhpStringFormCurrency(string $doctrineStringPhpStringFormCurrency): self
    {
        $this->doctrineStringPhpStringFormCurrency = $doctrineStringPhpStringFormCurrency;

        return $this;
    }

    public function getDoctrineSmallintPhpIntegerFormChoice(): ?int
    {
        return $this->doctrineSmallintPhpIntegerFormChoice;
    }

    public function setDoctrineSmallintPhpIntegerFormChoice(int $doctrineSmallintPhpIntegerFormChoice): self
    {
        $this->doctrineSmallintPhpIntegerFormChoice = $doctrineSmallintPhpIntegerFormChoice;

        return $this;
    }

    public function getDoctrineSimpleArrayPhpArrayFormChoice(): ?array
    {
        return $this->doctrineSimpleArrayPhpArrayFormChoice;
    }

    public function setDoctrineSimpleArrayPhpArrayFormChoice(array $doctrineSimpleArrayPhpArrayFormChoice): self
    {
        $this->doctrineSimpleArrayPhpArrayFormChoice = $doctrineSimpleArrayPhpArrayFormChoice;

        return $this;
    }

    public function getDoctrineArrayPhpArrayFormChoice(): ?array
    {
        return $this->doctrineArrayPhpArrayFormChoice;
    }

    public function setDoctrineArrayPhpArrayFormChoice(array $doctrineArrayPhpArrayFormChoice): self
    {
        $this->doctrineArrayPhpArrayFormChoice = $doctrineArrayPhpArrayFormChoice;

        return $this;
    }

    public function getDoctrineJsonPhpArrayFormChoice(): ?array
    {
        return $this->doctrineJsonPhpArrayFormChoice;
    }

    public function setDoctrineJsonPhpArrayFormChoice(array $doctrineJsonPhpArrayFormChoice): self
    {
        $this->doctrineJsonPhpArrayFormChoice = $doctrineJsonPhpArrayFormChoice;

        return $this;
    }

    public function getDoctrineObjectPhpObjectFormChoice()
    {
        return $this->doctrineObjectPhpObjectFormChoice;
    }

    public function setDoctrineObjectPhpObjectFormChoice($doctrineObjectPhpObjectFormChoice): self
    {
        $this->doctrineObjectPhpObjectFormChoice = $doctrineObjectPhpObjectFormChoice;

        return $this;
    }

    public function getDoctrineDatePhpDateTimeFormDate(): ?\DateTimeInterface
    {
        return $this->doctrineDatePhpDateTimeFormDate;
    }

    public function setDoctrineDatePhpDateTimeFormDate(\DateTimeInterface $doctrineDatePhpDateTimeFormDate): self
    {
        $this->doctrineDatePhpDateTimeFormDate = $doctrineDatePhpDateTimeFormDate;

        return $this;
    }

    public function getDoctrineTimePhpDateTimeFormTime(): ?\DateTimeInterface
    {
        return $this->doctrineTimePhpDateTimeFormTime;
    }

    public function setDoctrineTimePhpDateTimeFormTime(\DateTimeInterface $doctrineTimePhpDateTimeFormTime): self
    {
        $this->doctrineTimePhpDateTimeFormTime = $doctrineTimePhpDateTimeFormTime;

        return $this;
    }

    public function getDoctrineDateTimePhpDateTimeFormDateTime(): ?\DateTimeInterface
    {
        return $this->doctrineDateTimePhpDateTimeFormDateTime;
    }

    public function setDoctrineDateTimePhpDateTimeFormDateTime(\DateTimeInterface $doctrineDateTimePhpDateTimeFormDateTime): self
    {
        $this->doctrineDateTimePhpDateTimeFormDateTime = $doctrineDateTimePhpDateTimeFormDateTime;

        return $this;
    }

    public function getDoctrineDatePhpDateTimeFormBirthday(): ?\DateTimeInterface
    {
        return $this->doctrineDatePhpDateTimeFormBirthday;
    }

    public function setDoctrineDatePhpDateTimeFormBirthday(\DateTimeInterface $doctrineDatePhpDateTimeFormBirthday): self
    {
        $this->doctrineDatePhpDateTimeFormBirthday = $doctrineDatePhpDateTimeFormBirthday;

        return $this;
    }

    public function getDoctrineDateIntervalPhpDateIntervalFormDateInterval(): ?\DateInterval
    {
        return $this->doctrineDateIntervalPhpDateIntervalFormDateInterval;
    }

    public function setDoctrineDateIntervalPhpDateIntervalFormDateInterval(\DateInterval $doctrineDateIntervalPhpDateIntervalFormDateInterval): self
    {
        $this->doctrineDateIntervalPhpDateIntervalFormDateInterval = $doctrineDateIntervalPhpDateIntervalFormDateInterval;

        return $this;
    }

    public function getDoctrineDateTimeImmutablePhpDateTimeFormDateTime(): ?\DateTimeImmutable
    {
        return $this->doctrineDateTimeImmutablePhpDateTimeFormDateTime;
    }

    public function setDoctrineDateTimeImmutablePhpDateTimeFormDateTime(\DateTimeImmutable $doctrineDateTimeImmutablePhpDateTimeFormDateTime): self
    {
        $this->doctrineDateTimeImmutablePhpDateTimeFormDateTime = $doctrineDateTimeImmutablePhpDateTimeFormDateTime;

        return $this;
    }

    public function getDoctrineStringPhpStringFormWeek(): ?string
    {
        return $this->doctrineStringPhpStringFormWeek;
    }

    public function setDoctrineStringPhpStringFormWeek(string $doctrineStringPhpStringFormWeek): self
    {
        $this->doctrineStringPhpStringFormWeek = $doctrineStringPhpStringFormWeek;

        return $this;
    }

    public function getDoctrineSmallintPhpIntegerFormRange(): ?int
    {
        return $this->doctrineSmallintPhpIntegerFormRange;
    }

    public function setDoctrineSmallintPhpIntegerFormRange(int $doctrineSmallintPhpIntegerFormRange): self
    {
        $this->doctrineSmallintPhpIntegerFormRange = $doctrineSmallintPhpIntegerFormRange;

        return $this;
    }

    public function getDoctrineBooleanPhpBooleanFormCheckbox(): ?bool
    {
        return $this->doctrineBooleanPhpBooleanFormCheckbox;
    }

    public function setDoctrineBooleanPhpBooleanFormCheckbox(bool $doctrineBooleanPhpBooleanFormCheckbox): self
    {
        $this->doctrineBooleanPhpBooleanFormCheckbox = $doctrineBooleanPhpBooleanFormCheckbox;

        return $this;
    }

    public function getDoctrineSmallintPhpIntegerFormRadio(): ?int
    {
        return $this->doctrineSmallintPhpIntegerFormRadio;
    }

    public function setDoctrineSmallintPhpIntegerFormRadio(int $doctrineSmallintPhpIntegerFormRadio): self
    {
        $this->doctrineSmallintPhpIntegerFormRadio = $doctrineSmallintPhpIntegerFormRadio;

        return $this;
    }

    public function getDoctrineStringPhpStringFormFile(): ?string
    {
        return $this->doctrineStringPhpStringFormFile;
    }

    public function setDoctrineStringPhpStringFormFile(string $doctrineStringPhpStringFormFile): self
    {
        $this->doctrineStringPhpStringFormFile = $doctrineStringPhpStringFormFile;

        return $this;
    }

    public function getDoctrineGuidPhpStringFormText(): ?string
    {
        return $this->doctrineGuidPhpStringFormText;
    }

    public function setDoctrineGuidPhpStringFormText(string $doctrineGuidPhpStringFormText): self
    {
        $this->doctrineGuidPhpStringFormText = $doctrineGuidPhpStringFormText;

        return $this;
    }

    public function getDoctrineFloatPhpDoubleFormNumber(): ?float
    {
        return $this->doctrineFloatPhpDoubleFormNumber;
    }

    public function setDoctrineFloatPhpDoubleFormNumber(float $doctrineFloatPhpDoubleFormNumber): self
    {
        $this->doctrineFloatPhpDoubleFormNumber = $doctrineFloatPhpDoubleFormNumber;

        return $this;
    }

    public function getDoctrineGuidPhpStringFormUuid(): ?string
    {
        return $this->doctrineGuidPhpStringFormUuid;
    }

    public function setDoctrineGuidPhpStringFormUuid(string $doctrineGuidPhpStringFormUuid): self
    {
        $this->doctrineGuidPhpStringFormUuid = $doctrineGuidPhpStringFormUuid;

        return $this;
    }

    public function getDoctrineBlobPhpResourceFormChoice()
    {
        return $this->doctrineBlobPhpResourceFormChoice;
    }

    public function setDoctrineBlobPhpResourceFormChoice($doctrineBlobPhpResourceFormChoice): self
    {
        $this->doctrineBlobPhpResourceFormChoice = $doctrineBlobPhpResourceFormChoice;

        return $this;
    }

    /**
     * @return Collection|SubEntity[]
     */
    public function getDoctrineOneToManyRelationPhpObjectFormEntity(): Collection
    {
        return $this->doctrineOneToManyRelationPhpObjectFormEntity;
    }

    public function addDoctrineOneToManyRelationPhpObjectFormEntity(SubEntity $doctrineOneToManyRelationPhpObjectFormEntity): self
    {
        if (!$this->doctrineOneToManyRelationPhpObjectFormEntity->contains($doctrineOneToManyRelationPhpObjectFormEntity)) {
            $this->doctrineOneToManyRelationPhpObjectFormEntity[] = $doctrineOneToManyRelationPhpObjectFormEntity;
            $doctrineOneToManyRelationPhpObjectFormEntity->setDoctrineManyToOneRealationPhpObjectEntity($this);
        }

        return $this;
    }

    public function removeDoctrineOneToManyRelationPhpObjectFormEntity(SubEntity $doctrineOneToManyRelationPhpObjectFormEntity): self
    {
        if ($this->doctrineOneToManyRelationPhpObjectFormEntity->removeElement($doctrineOneToManyRelationPhpObjectFormEntity)) {
            // set the owning side to null (unless already changed)
            if ($doctrineOneToManyRelationPhpObjectFormEntity->getDoctrineManyToOneRealationPhpObjectEntity() === $this) {
                $doctrineOneToManyRelationPhpObjectFormEntity->setDoctrineManyToOneRealationPhpObjectEntity(null);
            }
        }

        return $this;
    }

    public function getDoctrineOneToOneRelationPhpObjectFormEntity(): ?SubEntity
    {
        return $this->doctrineOneToOneRelationPhpObjectFormEntity;
    }

    public function setDoctrineOneToOneRelationPhpObjectFormEntity(?SubEntity $doctrineOneToOneRelationPhpObjectFormEntity): self
    {
        $this->doctrineOneToOneRelationPhpObjectFormEntity = $doctrineOneToOneRelationPhpObjectFormEntity;

        return $this;
    }

    public function getDoctrineJsonPhpArrayFormCollection(): ?array
    {
        return $this->doctrineJsonPhpArrayFormCollection;
    }

    public function setDoctrineJsonPhpArrayFormCollection(array $doctrineJsonPhpArrayFormCollection): self
    {
        $this->doctrineJsonPhpArrayFormCollection = $doctrineJsonPhpArrayFormCollection;

        return $this;
    }

}
