<?php

namespace KejawenLab\Application\SemartHris\DataFixtures\ORM;

use KejawenLab\Application\SemartHris\Entity\EducationTitle;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.id>
 */
class EducationTitleFixtures extends Fixture
{
    /**
     * @return string
     */
    protected function getFixtureFilePath(): string
    {
        return 'education_title.yaml';
    }

    /**
     * @return mixed
     */
    protected function createNew()
    {
        return new EducationTitle();
    }

    /**
     * @return string
     */
    protected function getReferenceKey(): string
    {
        return 'education_title';
    }
}
