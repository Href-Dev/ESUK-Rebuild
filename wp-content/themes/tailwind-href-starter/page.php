<?php get_header(); ?>
<article <?php post_class('blocks'); ?>>
  <?php 
    if (have_posts()) : while (have_posts()) : the_post();
      the_content(); 
    endwhile; endif;
  ?>

  <?php if(is_front_page()): ?>
    <div class="site-container subtext my-100">
      <h1>Example Heading 1</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim, urna nec suscipit luctus, lectus sapien tincidunt ligula, et gravida odio felis id nisi. Ut non mi nec erat vestibulum ultricies. <a href="#">Learn more here</a>.</p>

      <h2>Example Heading 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique risus eget nunc placerat, nec fermentum libero scelerisque. Phasellus eu nulla a ligula pellentesque volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed mollis dui euismod, fermentum est vel, iaculis lorem. Quisque nec <a href="#">this link</a> mauris in risus luctus dapibus non nec magna.</p>

      <h3>Example Heading 3</h3>
      <p>
        Fusce consequat enim id ipsum hendrerit tristique. Proin aliquam, justo ut cursus ultricies, erat velit mollis erat, in laoreet eros arcu quis nulla. Duis sed erat in tortor condimentum fermentum sit amet a enim. Nunc malesuada consequat urna a molestie. Nulla viverra purus non mi iaculis, vel posuere justo vehicula. 
        <a href="#">Click here</a> for additional details. 
      </p>

      <h4>Example Heading 4</h4>
      <p>
        Suspendisse ultrices gravida magna, sed consequat erat viverra id. Vivamus rutrum, est sit amet dignissim gravida, dolor lectus viverra justo, et lacinia ex ligula nec est. Integer scelerisque lorem quis est hendrerit vestibulum.
      </p>

      <p>Below is an example table:</p>

      <table data-animate>
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
          </tr>
          <tr>
            <td>Example 1</td>
            <td>Example 2</td>
            <td>Example 3</td>
          </tr>
        </tbody>
      </table>

      <h5 data-animate="fade-left">Example Heading 5</h5>
      <p>Here’s an example of an unordered list:</p>
      <ul data-animate="fade-left">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit <a href="#">with a link</a></li>
        <li>Nulla facilisi</li>
      </ul>

      <p data-animate="fade-right">And here’s an ordered list:</p>
      <ol>
        <li>Fusce consequat enim</li>
        <li>Vivamus tristique risus eget nunc</li>
        <li>Pellentesque dignissim urna nec suscipit</li>
      </ol>

      <h6 data-animate="fade-in">Example Heading 6</h6>
      <p>
        Duis bibendum sapien ut arcu dictum, at bibendum purus fermentum. Suspendisse potenti. Ut sed tincidunt mi, quis tincidunt lorem. Praesent interdum urna sed velit varius, sed gravida mauris tristique. Ut vehicula lorem nec lectus faucibus, at vulputate libero molestie. Nam auctor neque at ligula suscipit, sit amet convallis neque fermentum. Ut viverra nisl ut lectus ultricies, nec scelerisque lectus mollis.
      </p>

      <div class="buttons-container flex flex-row gap-24" data-animate="fade-up" data-delay="5">
        <div class="btn">Primary Button</div>

        <div class="btn secondary">Secondary Button</div>
      </div>
    </div>

    <section class="site-container" data-animate="fade-up">
        
      <div class="swiper" data-swiper-type="example-swiper">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide grid grid-cols-2 items-center gap-40">
            <div class="left-container flex flex-col gap-24 justify-center">
              <h1>Example Slide</h1>
              <div class="subtext">
                <p>
                  lorem-ipsum dolor sit amet, consectetur adipiscing elit. 
                  Pellentesque dignissim, urna nec suscipit luctus, lectus sapien 
                  tincidunt ligula, et gravida odio felis id nisi. Ut non mi nec 
                  erat vestibulum ultricies. 
                </p>
                <a href="#">Learn more here</a>.
              </div>
            </div>
            <div class="right-container">
              <div class="image-container w-full h-auto min-h-[400px] object-cover bg-[#aaa]">
              </div>
            </div>
          </div>
          
          <div class="swiper-slide grid grid-cols-2 items-center gap-40">
            <div class="left-container flex flex-col gap-24 justify-center">
              <h1>Example Slide 2</h1>
              <div class="subtext">
                <p>
                  lorem-ipsum dolor sit amet, consectetur adipiscing elit. 
                  Pellentesque dignissim, urna nec suscipit luctus, lectus sapien 
                  tincidunt ligula, et gravida odio felis id nisi. Ut non mi nec 
                  erat vestibulum ultricies. 
                </p>
                <a href="#">Learn more here</a>.
              </div>
            </div>
            <div class="right-container">
              <div class="image-container w-full h-auto min-h-[400px] object-cover bg-[#aaa]">
              </div>
            </div>
          </div>
          
          <div class="swiper-slide grid grid-cols-2 items-center gap-40">
            <div class="left-container flex flex-col gap-24 justify-center">
              <h1>Example Slide 3</h1>
              <div class="subtext">
                <p>
                  lorem-ipsum dolor sit amet, consectetur adipiscing elit. 
                  Pellentesque dignissim, urna nec suscipit luctus, lectus sapien 
                  tincidunt ligula, et gravida odio felis id nisi. Ut non mi nec 
                  erat vestibulum ultricies. 
                </p>
                <a href="#">Learn more here</a>.
              </div>
            </div>
            <div class="right-container">
              <div class="image-container w-full h-auto min-h-[400px] object-cover bg-[#aaa]">
              </div>
            </div>
          </div>

        </div>
        <?php $args = [
          'nav_colour' => 'white',
          'pagination_colour' => 'white',
        ]; ?>
        <?php get_template_part('template-parts/components/swiper-nav', null, $args); ?>
        <?php get_template_part('template-parts/components/swiper-pag', null, $args); ?>
      </section>

    </div>
  <?php endif; ?>
</article>

<?php get_footer(); ?>
