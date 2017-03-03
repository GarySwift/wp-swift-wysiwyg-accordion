WP Swift: WYSIWYG Accordion

 * Plugin Name:       WP Swift: WYSIWYG Accordion
 * Description:       Output zurb foundation (5.1) accordion content with wysiwyg shortcodes
 * Version:           1.0.0
 * Author:            Gary Swift
 * License:           GPL-2.0+
 * Text Domain:       wp-swift-wysiwyg-accordion

## Example Usage
`
[accordion section=’a’]

[accordion-item id=’1′ section=’a’]
Synergistically network best-of-breed schemas vis-a-vis professional models. Intrinsicly revolutionize distributed deliverables with process-centric imperatives. Authoritatively evisculate leveraged mindshare after scalable e-commerce.[/accordion-item]

[accordion-item id=’2′ section=’a’]
Intrinsicly revolutionize distributed deliverables with process-centric imperatives. Authoritatively evisculate leveraged mindshare after scalable e-commerce. Competently empower market positioning e-services through client-based ROI.
[/accordion-item]

[accordion-item id=’3′ section=’a’]
Phosfluorescently visualize an expanded array of solutions without viral expertise.
[/accordion-item]

[/accordion]
`
## Sample Output
`
<ul class="accordion" id="accordion-a" data-accordion="10tewi-accordion" role="tablist">
  <li class="accordion-navigation">
    <a href="#panel1a">Accordion 1</a>
    <div id="panel1a" class="content active">Synergistically network best-of-breed schemas vis-a-vis professional models. Intrinsicly revolutionize distributed deliverables with process-centric imperatives. Authoritatively evisculate leveraged mindshare after scalable e-commerce.</div>
  </li>
          <li class="accordion-navigation">
    <a href="#panel2a">Accordion 2</a>
    <div id="panel2a" class="content active">Intrinsicly revolutionize distributed deliverables with process-centric imperatives. Authoritatively evisculate leveraged mindshare after scalable e-commerce. Competently empower market positioning e-services through client-based ROI. </div>
  </li>
          <li class="accordion-navigation">
    <a href="#panel3a">Accordion 3</a>
    <div id="panel3a" class="content active">Phosfluorescently visualize an expanded array of solutions without viral expertise.</div>
  </li>
</ul>
`
