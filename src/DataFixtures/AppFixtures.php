<?php

namespace App\DataFixtures;

use App\Entity\Product;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $product1 = new Product();
         $product1->setTitle('Test product 00001');
         $product1->setDescription('Test-Product-00001, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
         $product1->setPrice(10.0);
         $product1->setImage('https://storage.googleapis.com/minisys/1.jpeg');
         $product1->setCreated(new DateTimeImmutable());
         $manager->persist($product1);

        $product2 = new Product();
        $product2->setTitle('Test product 00002');
        $product2->setDescription('Test-Product-00002, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product2->setPrice(10.0);
        $product2->setImage('https://storage.googleapis.com/minisys/2.jpeg');
        $product2->setCreated(new DateTimeImmutable());
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setTitle('Test product 00003');
        $product3->setDescription('Test-Product-00003, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product3->setPrice(10.0);
        $product3->setImage('https://storage.googleapis.com/minisys/3.jpeg');
        $product3->setCreated(new DateTimeImmutable());
        $manager->persist($product3);

        $product4 = new Product();
        $product4->setTitle('Test product 00004');
        $product4->setDescription('Test-Product-00004, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product4->setPrice(10.0);
        $product4->setImage('https://storage.googleapis.com/minisys/4.jpeg');
        $product4->setCreated(new DateTimeImmutable());
        $manager->persist($product4);

        $product5 = new Product();
        $product5->setTitle('Test product 00005');
        $product5->setDescription('Test-Product-00005, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product5->setPrice(10.0);
        $product5->setImage('https://storage.googleapis.com/minisys/5.jpeg');
        $product5->setCreated(new DateTimeImmutable());
        $manager->persist($product5);

        $product6 = new Product();
        $product6->setTitle('Test product 00006');
        $product6->setDescription('Test-Product-00006, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product6->setPrice(10.0);
        $product6->setImage('https://storage.googleapis.com/minisys/6.jpeg');
        $product6->setCreated(new DateTimeImmutable());
        $manager->persist($product6);

        $product7 = new Product();
        $product7->setTitle('Test product 00007');
        $product7->setDescription('Test-Product-00007, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product7->setPrice(10.0);
        $product7->setImage('https://storage.googleapis.com/minisys/7.jpeg');
        $product7->setCreated(new DateTimeImmutable());
        $manager->persist($product7);

        $product8 = new Product();
        $product8->setTitle('Test product 00008');
        $product8->setDescription('Test-Product-00008, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product8->setPrice(10.0);
        $product8->setImage('https://storage.googleapis.com/minisys/8.jpeg');
        $product8->setCreated(new DateTimeImmutable());
        $manager->persist($product8);

        $product9 = new Product();
        $product9->setTitle('Test product 00009');
        $product9->setDescription('Test-Product-00009, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product9->setPrice(10.0);
        $product9->setImage('https://storage.googleapis.com/minisys/9.jpeg');
        $product9->setCreated(new DateTimeImmutable());
        $manager->persist($product9);

        $product10 = new Product();
        $product10->setTitle('Test product 00010');
        $product10->setDescription('Test-Product-00010, internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and presents an algorithm, a design technique, an application area, or a related topic. The algorithms are described and designed in a manner to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.');
        $product10->setPrice(10.0);
        $product10->setImage('https://storage.googleapis.com/minisys/0.jpeg');
        $product10->setCreated(new DateTimeImmutable());
        $manager->persist($product10);

        $manager->flush();
    }
}
