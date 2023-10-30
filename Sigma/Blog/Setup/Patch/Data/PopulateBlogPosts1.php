<?php declare(strict_types=1);

namespace Sigma\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Sigma\Blog\Api\PostRepositoryInterface;

class PopulateBlogPosts1 implements DataPatchInterface
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
        'title' => 'Royal Enfiled Hunter 350',
        'content' => 'Displacement
349.34 cc
Max Power
20.2 bhp @ 6100 rpm
Max Torque
27 Nm @ 4000 rpm
Mileage - ARAI
36 kmpl
Mileage - Owner Reported
35 kmpl
Riding Range
455 Km
Top Speed
114 Kmph
Riding Modes
No
Transmission
5 Speed Manual
Transmission Type
Chain Drive
Gear Shifting Pattern
1 Down 4 Up
Cylinders
1
Bore
72 mm
Stroke
85.8 mm
Valves Per Cylinder
2
Compression Ratio
9.5:1
Ignition
CDI
Spark Plugs
1 Per Cylinder
Cooling System
Air/Oil Cooled
Clutch
Wet Multiplate
Fuel Delivery System
Fuel Injection
Fuel Tank Capacity
13 litres
Reserve Fuel Capacity
2.6 litres
Emission Standard
BS6
Fuel Type
Petrol'
    ]);
    $this->postRepository->save($post);

    $this->moduleDataSetup->endSetup();
}
}