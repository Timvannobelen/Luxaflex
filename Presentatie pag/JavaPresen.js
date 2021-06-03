console.log("Kees");

let slides = `
    <section>
      <h1>Hello World</h1>
      <p>hello hello</p>
    </section>
    <section>
			<section><h1>Vertical Slide 1</h1></section>
			<section><h1>Vertical Slide 2</h1></section>
		</section>
    <section>Another one</section>
    <section>
    <section>
      <h1>How to code</h1>
      <p>How to do something?</p>
    </section>
    <section>
      <h3>Code example</h3>
      <pre>
        <code class="sql" data-trim data-noescape>
-- Initials
insert into "topic" ("forum_id", "subject")
values (2, 'D''artagnian');
        </code>
      </pre>
    </section>
    </section>
`;

$(document ).ready(function() {
  
  $('.slides').html(slides);
  
  Reveal.initialize({
  controls: true,
  progress: true,
  history: true,
  center: true
});
});