<?php declare(strict_types=1);

 namespace Sigma\BlogExtra\Plugin;
 use Sigma\Blog\Observer\LogPostDetailView;

 class PreventPostDetailLogger
 {
  /**
   * @param LogPostDetailView $subject
   * @param callable $proceed
      */
  public function aroundExecute(
       LogPostDetailView $subject,
       callable $proceed
   )
   {
     //Don't do anything to prevent logger from executing.
   }
 }