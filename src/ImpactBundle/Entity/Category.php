<?php
namespace ImpactBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ImpactBundle\Entity\Model\BaseCategory;
/**
 * @ORM\Entity(repositoryClass="ImpactBundle\Repository\CategoryRepository")
 * @ORM\Table(name="df_category")
 */
class Category extends BaseCategory
{
}