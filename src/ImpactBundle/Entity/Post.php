<?php
namespace ImpactBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ImpactBundle\Entity\Model\BasePost;
/**
 * 
 * @ORM\Entity(repositoryClass="ImpactBundle\Repository\PostRepository")
 * @ORM\Table(name="df_post")
 * 
 */
class Post extends BasePost
{
}