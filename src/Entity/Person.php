<?php declare(strict_types=1);

final class Person
{
    private string $name;
    private string $surname;
    private DateTime $birthday;
    private string $telephone;
    private string $birthplace;
    private string $birthName;
    private string $nationality;
    private string $gender;
    private bool $hasWorkPermission;
    private string $civilStatus;
    private bool $hasChildren;
    private bool $hasDisability;
    private BankAccount $bankAccount;
    private TaxInformation $taxInformation;
    private HealthInsurance $healthInsurance;
    private Confession $confession;
    private WorkInformation $workInformation;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): Person
    {
        $this->surname = $surname;
        return $this;
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(DateTime $birthday): Person
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): Person
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getBirthplace(): string
    {
        return $this->birthplace;
    }

    public function setBirthplace(string $birthplace): Person
    {
        $this->birthplace = $birthplace;
        return $this;
    }

    public function getBirthName(): string
    {
        return $this->birthName;
    }

    public function setBirthName(string $birthName): Person
    {
        $this->birthName = $birthName;
        return $this;
    }

    public function getNationality(): string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): Person
    {
        $this->nationality = $nationality;
        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): Person
    {
        $this->gender = $gender;
        return $this;
    }

    public function isHasWorkPermission(): bool
    {
        return $this->hasWorkPermission;
    }

    public function setHasWorkPermission(bool $hasWorkPermission): Person
    {
        $this->hasWorkPermission = $hasWorkPermission;
        return $this;
    }

    public function getCivilStatus(): string
    {
        return $this->civilStatus;
    }

    public function setCivilStatus(string $civilStatus): Person
    {
        $this->civilStatus = $civilStatus;
        return $this;
    }

    public function isHasChildren(): bool
    {
        return $this->hasChildren;
    }

    public function setHasChildren(bool $hasChildren): Person
    {
        $this->hasChildren = $hasChildren;
        return $this;
    }

    public function isHasDisability(): bool
    {
        return $this->hasDisability;
    }

    public function setHasDisability(bool $hasDisability): Person
    {
        $this->hasDisability = $hasDisability;
        return $this;
    }

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): Person
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getTaxInformation(): TaxInformation
    {
        return $this->taxInformation;
    }

    public function setTaxInformation(TaxInformation $taxInformation): Person
    {
        $this->taxInformation = $taxInformation;
        return $this;
    }

    public function getHealthInsurance(): HealthInsurance
    {
        return $this->healthInsurance;
    }

    public function setHealthInsurance(HealthInsurance $healthInsurance): Person
    {
        $this->healthInsurance = $healthInsurance;
        return $this;
    }

    public function getConfession(): Confession
    {
        return $this->confession;
    }

    public function setConfession(Confession $confession): Person
    {
        $this->confession = $confession;
        return $this;
    }

    public function getWorkInformation(): WorkInformation
    {
        return $this->workInformation;
    }

    public function setWorkInformation(WorkInformation $workInformation): Person
    {
        $this->workInformation = $workInformation;
        return $this;
    }
}