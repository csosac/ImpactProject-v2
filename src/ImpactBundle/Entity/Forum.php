<?php
namespace ImpactBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ImpactBundle\Entity\Model\BaseForum;
/**
 * @ORM\Entity(repositoryClass="ImpactBundle\Repository\ForumRepository")
 * @ORM\Table(name="df_forum")
 */
class Forum extends BaseForum
{
}