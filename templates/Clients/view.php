<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= $this->Number->format($client->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($client->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($client->updated_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Client Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->client_name)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Client Email') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->client_email)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Client Logo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->client_logo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
