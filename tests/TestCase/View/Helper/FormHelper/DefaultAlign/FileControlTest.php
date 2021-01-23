<?php
declare(strict_types=1);

namespace BootstrapUI\Test\TestCase\View\Helper\FormHelper\DefaultAlign;

use BootstrapUI\Test\TestCase\View\Helper\FormHelper\AbstractFormHelperTest;

class FileControlTest extends AbstractFormHelperTest
{
    public function testDefaultAlignFileControl()
    {
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
        ]);
        $expected = [
            ['div' => ['class' => 'form-group file']],
                ['label' => ['for' => 'file']],
                    'File',
                '/label',
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'form-control-file',
                ]],
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }

    public function testDefaultAlignFileControlWithDisabledLabel()
    {
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
            'label' => false,
        ]);
        $expected = [
            ['div' => ['class' => 'form-group file']],
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'form-control-file',
                ]],
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }

    public function testDefaultAlignFileControlWithCustomLabel()
    {
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
            'label' => 'Custom Label',
        ]);
        $expected = [
            ['div' => ['class' => 'form-group file']],
                ['label' => ['for' => 'file']],
                    'Custom Label',
                '/label',
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'form-control-file',
                ]],
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }

    public function testDefaultAlignFileControlWithTooltip()
    {
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
            'tooltip' => 'Tooltip text',
        ]);
        $expected = [
            ['div' => ['class' => 'form-group file']],
                ['label' => ['for' => 'file']],
                    'File ',
                    'span' => [
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip text',
                        'class' => 'fas fa-info-circle',
                    ],
                    '/span',
                '/label',
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'form-control-file',
                ]],
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }

    public function testDefaultAlignFileControlWithError()
    {
        $this->article['errors'] = [
            'file' => ['error message'],
        ];
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
        ]);
        $expected = [
            ['div' => ['class' => 'form-group file is-invalid']],
                ['label' => ['for' => 'file']],
                    'File',
                '/label',
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'is-invalid form-control-file',
                ]],
                ['div' => ['class' => 'invalid-feedback']],
                    'error message',
                '/div',
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }

    public function testDefaultAlignFileControlContainerOptions()
    {
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
            'container' => [
                'class' => 'container-class',
                'attribute' => 'container-attribute',
            ],
        ]);
        $expected = [
            ['div' => [
                'attribute' => 'container-attribute',
                'class' => 'container-class form-group file',
            ]],
                ['label' => ['for' => 'file']],
                    'File',
                '/label',
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'form-control-file',
                ]],
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }

    public function testDefaultAlignFileControlContainerOptionsWithError()
    {
        $this->article['errors'] = [
            'file' => ['error message'],
        ];
        $this->Form->create($this->article);

        $result = $this->Form->control('file', [
            'type' => 'file',
            'container' => [
                'class' => 'container-class',
                'attribute' => 'container-attribute',
            ],
        ]);
        $expected = [
            ['div' => [
                'attribute' => 'container-attribute',
                'class' => 'container-class form-group file is-invalid',
            ]],
                ['label' => ['for' => 'file']],
                    'File',
                '/label',
                ['input' => [
                    'type' => 'file',
                    'name' => 'file',
                    'id' => 'file',
                    'class' => 'is-invalid form-control-file',
                ]],
                ['div' => ['class' => 'invalid-feedback']],
                    'error message',
                '/div',
            '/div',
        ];
        $this->assertHtml($expected, $result);
    }
}
