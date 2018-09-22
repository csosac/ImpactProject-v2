<?php
namespace ImpactBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ImpactBundle\Entity\Model\BaseTopic;
/**
 *
 * @ORM\Entity(repositoryClass="ImpactBundle\Repository\TopicRepository")
 * @ORM\Table(name="df_topic")
 * 
 */
class Topic extends BaseTopic
{
}