<div class="news">
   <div class="homearticle">

{foreach from=$result item=oneItem}
       <section>
    <img src=img/{$oneItem.image}>
    <div class="opzij">
    <h1>{$oneItem.title}</h1>
    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    <p>{$oneItem.content|truncate:150}</p>
        </div>
       </section>
    {/foreach}

       </div>
        </div>

   
<div class="page">
<ul>
  {for $foo=1 to $total_number_articles}
    <li><a href="?action=home&page_nr={$foo}">{$foo}</a></li>
{/for}
</ul>
    </div>
    




