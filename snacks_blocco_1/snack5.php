<?php

/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.

*/

$parag = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quaerat possimus consequatur aspernatur harum illum laboriosam exercitationem minus sunt incidunt vero, quod beatae laudantium non quidem impedit error quia minima! Natus, voluptatibus rerum. Quos ex cum repudiandae corporis neque, voluptatibus laudantium pariatur fugiat distinctio soluta officiis aliquid. Qui quia hic expedita necessitatibus iste totam nobis ab earum quo culpa! Modi minima, deleniti excepturi magnam quisquam voluptates cum a nihil voluptatibus dolorem ipsa praesentium harum, facilis odit quae natus? Odit qui dolores exercitationem ipsum aperiam eligendi labore quibusdam repudiandae. Velit soluta ab excepturi pariatur. Voluptatum ea quam laudantium maxime nesciunt aspernatur autem inventore, tempora eum ullam fugit modi reiciendis unde distinctio velit nemo natus sunt, alias praesentium eaque. Quis laudantium vel ratione culpa reiciendis. Quasi, voluptate quis. Saepe eveniet, iste, possimus commodi aspernatur blanditiis eos soluta ratione odio repellat distinctio numquam perspiciatis facilis asperiores omnis qui laborum. Voluptatum sunt fugiat voluptates ea, cupiditate vel nobis fugit praesentium dolore excepturi debitis id qui, atque reprehenderit fuga officiis veritatis minus vitae. Reiciendis, hic provident. A dignissimos quidem, ea rerum nulla amet, aliquid porro quasi expedita voluptas cumque delectus culpa, dolorum suscipit? Fugiat culpa voluptas soluta, facilis rerum atque necessitatibus quo voluptate assumenda aliquam cum ab quia ad velit minus. Illo doloremque inventore quo minima explicabo placeat quia at. Tenetur ullam, suscipit nisi doloribus dignissimos architecto ratione. Aut asperiores, rem autem atque minima soluta, est, ducimus quos error esse fugiat? Quod facere quia qui iure nemo labore molestiae explicabo quisquam veniam minus? Eligendi et hic iste voluptate nesciunt praesentium voluptatibus reprehenderit architecto. Libero, odit porro assumenda laudantium eius vitae dignissimos eveniet modi rerum non? Iusto fugiat dicta vero. Corporis, veritatis eveniet accusamus quibusdam, distinctio similique impedit praesentium, blanditiis autem obcaecati debitis architecto molestias odio perspiciatis et odit harum aliquam fugiat. Est unde saepe at?';

$paragrafi = explode('.', $parag);

var_dump($parag);

for ($i = 0; $i < count($paragrafi); $i++) {
  $paragrafo = $paragrafi[$i];
  var_dump($paragrafo);
}
