<?php

namespace Drupal\twig_functions_xtra\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Drupal\Core\Routing\UrlGeneratorInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Url;
class RenderURLResultData extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return [
      new TwigFunction('url_result_data', [$this, 'renderURLResultData']),
    ];
  }

  /**
   * Returns url of a node for use externally
   * @return string
   */
  public function renderURLResultData($result_url)
  {  
      $baseurl = Url::fromRoute('<front>', [], ['absolute' => TRUE])->toString();
      $url = $baseurl.$result_url;
      return $url; 
    }   

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'url_result_data.twig_extension';
  }

}