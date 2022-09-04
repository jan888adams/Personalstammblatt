<?php declare(strict_types=1);

final class WorkInformation
{
    private DateTime $startDate;
    private string $contractType;
    private string $employmentType;
    private float $monthlyIncome;
    private float $salary;
    private float $monthlyWorkTime;
    private float $weeklyWorkTime;
    private int $vacationDays;
    private bool $hasCapitalAccumulationBenefits;
    private bool $hasEmployeePension;

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     */
    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getContractType(): string
    {
        return $this->contractType;
    }

    /**
     * @param string $contractType
     */
    public function setContractType(string $contractType): void
    {
        $this->contractType = $contractType;
    }

    /**
     * @return string
     */
    public function getEmploymentType(): string
    {
        return $this->employmentType;
    }

    /**
     * @param string $employmentType
     */
    public function setEmploymentType(string $employmentType): void
    {
        $this->employmentType = $employmentType;
    }

    /**
     * @return float
     */
    public function getMonthlyIncome(): float
    {
        return $this->monthlyIncome;
    }

    /**
     * @param float $monthlyIncome
     */
    public function setMonthlyIncome(float $monthlyIncome): void
    {
        $this->monthlyIncome = $monthlyIncome;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return float
     */
    public function getMonthlyWorkTime(): float
    {
        return $this->monthlyWorkTime;
    }

    /**
     * @param float $monthlyWorkTime
     */
    public function setMonthlyWorkTime(float $monthlyWorkTime): void
    {
        $this->monthlyWorkTime = $monthlyWorkTime;
    }

    /**
     * @return float
     */
    public function getWeeklyWorkTime(): float
    {
        return $this->weeklyWorkTime;
    }

    /**
     * @param float $weeklyWorkTime
     */
    public function setWeeklyWorkTime(float $weeklyWorkTime): void
    {
        $this->weeklyWorkTime = $weeklyWorkTime;
    }

    /**
     * @return int
     */
    public function getVacationDays(): int
    {
        return $this->vacationDays;
    }

    /**
     * @param int $vacationDays
     */
    public function setVacationDays(int $vacationDays): void
    {
        $this->vacationDays = $vacationDays;
    }

    /**
     * @return bool
     */
    public function isHasCapitalAccumulationBenefits(): bool
    {
        return $this->hasCapitalAccumulationBenefits;
    }

    /**
     * @param bool $hasCapitalAccumulationBenefits
     */
    public function setHasCapitalAccumulationBenefits(bool $hasCapitalAccumulationBenefits): void
    {
        $this->hasCapitalAccumulationBenefits = $hasCapitalAccumulationBenefits;
    }

    /**
     * @return bool
     */
    public function isHasEmployeePension(): bool
    {
        return $this->hasEmployeePension;
    }

    /**
     * @param bool $hasEmployeePension
     */
    public function setHasEmployeePension(bool $hasEmployeePension): void
    {
        $this->hasEmployeePension = $hasEmployeePension;
    }
}