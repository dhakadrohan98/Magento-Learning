<?php declare(strict_types=1);

namespace Sigma\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Sigma\Blog\Api\PostRepositoryInterface;

class PopulateBlogPosts2 implements DataPatchInterface
{

    public function __construct(
        private ModuleDataSetupInterface $moduleDataSetup,
        private \Sigma\Blog\Model\PostFactory $postFactory,
        private \Sigma\Blog\Api\PostRepositoryInterface $postRepository
    ) {}

public static function getDependencies()
{
    return [];
}

/**
 * Get aliases (previous names) for the patch.
 *
 * @return string[]
 */
public function getAliases()
{
    return [];
}

/**
 * Run code inside patch
 * If code fails, patch must be reverted, in case when we are speaking about schema - then under revert
 * means run PatchInterface::revert()
 *
 * If we speak about data, under revert means: $transaction->rollback()
 *
 * @return $this
 */
public function apply()
{
    $this->moduleDataSetup->startSetup();

    $post = $this->postFactory->create();
    $post->setData([
        'title' => 'An awesome post',
        'content' => 'This is totally awesome!'
    ]);
    $this->postRepository->save($post);

    $this->moduleDataSetup->endSetup();
}
}