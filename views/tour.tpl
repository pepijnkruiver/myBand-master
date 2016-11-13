<div class="tour">
    <div class="tour2">
        <div class="tour3">
{foreach from=$result item=oneItem}
    <article class="date">
    <h3>{$oneItem.Name}</h3>
    {$oneItem.Place|truncate:1000:'..':true:true}
    {$oneItem.Date}
    </article>
    {/foreach}

        </div>
    </div>
</div>