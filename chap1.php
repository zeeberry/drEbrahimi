
<center><h3>CHAPTER 1</h3>

<h4>THE EVOLUTION OF COMPUTER PROGRAMMING AND LANGUAGES: AN OVERVIEW OF C AND C++</center></h4>

<p>

It is important to familiarize yourself with the fundamentals of computer programming, computer languages, and their evolution. It may not be apparent to you at this time how this knowledge is going to help you to program in C/C++. It should, however, be noted that within the past fifty years, a multitude of programming concepts and methods has been introduced, and many different languages have been designed. Yet, they all still depend on a foundation that has remained relatively the same. 


</p><p>


In this chapter, you are going to encounter unfamiliar terminology. What I would like you to do is to skim through this chapter and grasp as much as you can, without attempting to understand everything fully. By examining the history of computer programming, it is hoped that you will be able to better understand the way programming and languages are shaped, and have an idea as to what to expect for the future of computer programming and languages.


</p><p>


 In order to give you a picture of computer programming and its abilities, I will introduce you to a very important program that is known as a <i>search</i>, written in both C and C++. You will then experience what I call the magic of programming, where the knowledge of building one program will lead you to build other programs without much effort. For example, you will see how a Telephone Operator <i>Search</i> Program can also act as a language translator, a dictionary, and can also easily become a bank or supermarket retrieval system. 


</p><p>


I will conclude the chapter by giving examples of pitfalls in C/C++ programming that may cause misconceptions and delay learning. These pitfalls, which are the result of hidden notions and unknown rules, are contributing factors to what I call the <i>mystery</i> of C/C++ programming. You should be aware that the problems these pitfalls cause have nothing to do with your intelligence, and that you will learn to solve them. 


</p><p>


By going through the foundations of programming and languages you will find it easier to build programs from scratch using C/C++ in the chapters that follow.


</p><p>


<h4>WHY PROGRAM?</h4>


</p><p>


Historically, the sole purpose of computers was to serve the scientific communities. Later on, computers progressed rapidly into business and education. Now, they are around us everywhere, and there is hardly an industry that does not need them. Whether in business or in the home, computers have come to maintain a dominant role in many people's lives. What was once done manually, mechanically or electrically has been replaced, or will be replaced, with computers. 


</p><p>


Although computers play a critical role in our society, most people are unaware that a set of instructions, known as a "program", governs and operates the computers. A computer demonstrates its intelligence through the execution of a program, and without programs a computer is just a useless box. A computer becomes friendlier, easier to use, and more efficient in direct proportion to the quality of the programs it runs. Programs can be regarded as the "mind" of the computer, and without them a computer cannot function. Programs can be created, modified, expanded, enhanced, and/or customized to one's needs. You might want to know what a program is and what it looks like even before you learn how to program.


</p><p>


Let's first discuss what a computer is. A computer can be considered a machine with three main components: 1) a <i>central processing unit (CPU)</i>, where the activities are initiated, coordinated, and performed; 2) <i>memory</i>, where information (program and data) is stored and retrieved; and 3) <i>input and output devices</i>, where information is entered and displayed. The CPU and the memory perform together, just like the cerebral cortex of our brains, while the input/output devices are analogous to our sensory organs. When the three components work together, a task is initiated, retrieved, analyzed, performed, ultimately stored, and/or displayed.


</p><p>


I cannot emphasize enough how important it is to learn programming, but I would also like to point out that teaching and learning programming is still considered a difficult task for many people. At least there is no discrimination when it comes to learning programming for it can be done literally at any age, almost as soon as you are able to read.


</p><p>


<h4>ARE WE PROGRAMMED? </h4>


</p><p>


For a moment, let's put computer programming aside and think about ourselves. After all, aren't we all programmed genetically, psychologically, and socially? Don't we follow a set of instructions that consist of a <i>sequence of events</i>, then <i>making decisions</i>, and <i>repeating this process over and over again</i>? These sets of instructions are known as <i>programs</i>, which can be presented by a natural language, such as English. What is your program today? Can you identify a sequence of events?  Did you make any decisions?  Did you repeat any event, or will you repeat the same set of events tomorrow?


</p><p>


<h4>IS EVERYTHING PROGRAMMED?</h4>


</p><p>


Before you begin to learn how to program, it is important for you to know that the internal hardware (<i>chips</i>) of the computer is programmed. When you turn on the computer, the environment and interface is programmed. Examples of the user interface and operating systems are DOS, Windows, and Unix. In addition, C/C++, the programming language that you are going to use, is already programmed. Moreover, games, word processors, ATM machines, communication systems, movie special effects, and almost all things else are programmed. Now it is your turn to program, from business applications to game design and hardware controls.


</p><p>


<h4>COMPUTER PROGRAMS AS PRE-AGREED RULES</h4>


</p><p>


Try to imagine the old days, when cavemen had to communicate with each other without any sophisticated language skills. Whether they communicated through sound or signs, they had to come to some kind of agreement and understanding amongst themselves. 

Suppose you want to communicate with a partner not with sound or signs, but by turning a series of light bulbs on and off according to the following rule: 


</p><p>


<center><i>

Let there be eight light bulbs situated on a desk, and let any

<br>communication between the two of you be achieved by turning these

<br> bulbs on or off at a given time.

</center></i>

<br>

How could effective communication be achieved? There would have to be some sort of pre-existing agreement about how any eight possible combinations of lights switched on and off could represent the alphabet, numbers, special signs, words, or actions. For example, you may agree that when the first two light bulbs and the last light bulb are on it will represent the letter <i>A</i>. Similarly you may agree to represent the letter <i>B</i> with some other combination of on and off. This trend can go on to represent other letters, digits, and special signs. 


</p><p>

To make it simple, we are going to show lights on as 1 and lights off as 0. We will call each light a <span class="bi">bit</span>.  1 will represent a lit bulb, and 0 will represent an unlit bulb. These 1s and 0s are referred to as binary numbers. For instance, the letter <i>A</i> is represented as an eight-bit combination of 11000001. The letter <i>B</i> is agreed upon as 11000010, and the number '0' is 00110100. These eight-bit combinations are known as a <span class="bi">byte</span>. We have enough combinations of on and off (1's and 0's) to represent the entire alphabet, digits, and any other signs. Now that you know how to represent each digit and each letter with zeros and ones, you would be able to place each digit representation next to each other to form a number. It would be like placing each letter next to each other to form a word. Can you imagine how your name can be represented using this kind of agreement? 


</p><p>


<h4>COMPUTER STANDARD CODE: ASCII</h4>


</p><p>


To represent computer characters (keyboard keys, symbols, etc.) several codes have been developed in the past. IBM created its own code sets, while other computer companies produced codes that were quite different. To standardize this coding system, a committee known as <i>American Standard Code for Information Interchange</i>, or simply ASCII, was commissioned to form a standard code. Today, ASCII (pronounced askey) is widely accepted and used in most computers. In ASCII, each character is given a unique number (code). Surprisingly, lower-case letters have different ASCII codes than the upper-case letters. For example, the ASCII code for lower-case '<span class="bold">a</span>' is 97 while the upper- case '<span class="bold">A</span>' is 65. Even the blank space has an ASCII code represented by the value of 32. Just keep in mind that when you save the letter <span class="bold">A</span> in your computer's memory it is not the shape of <span class="bold">A</span> that is stored.  The letter is stored as a series of 1's and 0's that represent the letter <span class="bold">A</span>. It is important to remember that what you see on the computer monitor or on the printer is a projection of those zeros and ones. You can associate this concept with the mechanism of the traditional typewriter; to type the letter <span class="bold">A</span>, you simply press the '<span class="bold">A</span>' key and the typewriter's handle with the engraved <span class="bold">A</span> is then hammered onto the paper.


</p><p>


Furthermore, to cover international languages and other symbols, a uniform code known as <i>Unicode</i> was developed.       


</p><p>


<h4>BINARY STATES</h4>


</p><p>


Today it is not necessary to use light bulbs or vacuum tubes to represent the states of on and off. Other means, such as electrical currents or magnetic fields, are commonly used to represent these two states, which we call binary states. You may be wondering why there are two states instead of three or more? One answer would be that it is easier to manipulate and work with binary representation. If it were not in the state of 1, then it would be in the state of 0. You may then ask why use only zeros and ones instead of other numbers, such as 1, 2, and 3. Well, you can represent characters that way too, but using zeros and ones makes it much easier. Some other possible binary state representations can be that if there is a current or not, magnet or no magnet, light or no light, hole or no hole. Perhaps future computers can use biological entities, such as a cell's DNA sequences for binary state representation. As switches have on and off states, the cell also can have two active and inactive states under certain circumstances. Now, imagine millions of microscopic spots (binary states) on a piece of board that can be grouped to form characters, words, and sentences, which thus comprises "information".


</p><p>


<h4>MACHINE LANGUAGE AND ASSEMBLY LANGUAGE</h4>


</p><p>


Now that we have a representation for letters, digits, and other symbols, how can computer functions, such as addition or subtraction, be represented? Do they adopt a similar type of representation? Yes, they do. Each computer operation, the place where the operation occurs, and the result of the operation have a unique code representation. For example, the addition operation will <i>add</i> the contents of two memory locations, and place the result in another memory location. This kind of operation that instructs the computer to perform a task is known as an instruction. We will need an agreement to represent <i>addition</i>, and an agreement to represent different ways to access the memory locations (addresses), as well as the tasks associated with these memories, which means that there is always a finite number of rules and words that tell the computer what to do. Such agreements comprise a language that is known as machine language. The codes used in this language are also composed of zeros and ones. 


</p><p>


The use of symbols or mnemonics to replace groups of binary numbers led to the development of assembly language. Obviously, assembly language has its own rules and regulations, but they are closely tied to machine language. Some of the common representations, known as instructions in machine and assembly languages, are Load, Store, Subtract, Jump, and Test. A program is created when these instructions are arranged in a certain order. 


</p><p>


Several other languages have been derived from the machine and assembly languages. Each has its own rules and agreements that serve specific tasks. You should think of C/C++ as one level or one layer above assembly language and machine language.


</p><p>


<h4>NATURAL LANGUAGES VERSUS COMPUTER LANGUAGES</h4>

</p><p>
	

We use natural languages to communicate and describe events. Each language is composed of sentences and combining words, in conjunction with rules and symbols that form each sentence. Each word has its own meaning.  In natural languages there are words or sentences that are ambiguous because they may have more than one interpretation. For example, the sentence <i>"Time flies like an arrow"</i> can be interpreted differently. Moreover, natural languages are a function of time and place, and therefore are dynamic. A word can lose its original meaning or can become obsolete due to lack of use. 


</p><p>


To communicate with a computer, a language is required as well. Just like a natural language, computer rules and regulations restrict computer languages. Computer or programming languages consists of finite sets of predefined words, rules, and symbols with no ambiguity. This makes computer languages easy to create and work with, while producing concrete results. Don't be surprised when you only need a few words and rules to begin programming (<i>the number may be as few as your ten fingers</i>). Use it to your advantage and allow your ideas to move forth your imagination into reality.


</p><p>


<h4>THE EVOLUTION OF PROGRAMMING LANGUAGES</h4>


</p><p>


Programming and human languages have both evolved similarly. Through time, new terms are added or elaborated upon, while others fall out of use and are discarded. Some programming languages continue to exist, while others became obsolete. Among the languages that have survived, there are some that became popular and are used by a majority of users, while certain companies or institutions use others.


</p><p>


<h4>LOW-LEVEL LANGUAGES (LLL)</h4>


</p><p>


Originally, machine language was the only language of the computer. Working with a bunch of 0's and 1's is tedious and error-prone. Small mistakes, such as altering a 0 to a 1 or vice versa, will change the meaning completely. When programming in machine language, the programmer has to know about the internal hardware, including the different methods of storing and accessing information, as well as the ways in which the CPU's registers (memory) function and interact with other components.  An improvement to the machine language was to replace a group of 0's and 1's with symbols (mnemonics). This <span class="bi">symbolic language</span> is called an <span class="bi">assembly language</span>. The problem is that assembly language may make the job of programming easier but still machine-dependent, which means that it depends on the computer hardware. It is simply just a one-to-one correspondence of machine language. Due to the fact that both machine and assembly languages are close to the machine level, both are known as <span class="bi">Low-Level Languages (LLL)</span>. Another problem with these languages is that they vary from machine to machine. Almost every computer chip (CPU) manufacturer such as Intel, Motorola, IBM, and DEC has its own machine language and, as a result, it's own assembly language. Interestingly, some companies do not standardize the machines that they manufacture. For example, IBM has developed an array of machine languages to serve specific purposes and to be compatible with hardware architecture design within the company. Because the instructions vary from machine to machine, this makes the job of a programmer much more difficult since the same program must be written differently. 


</p><p>


Since the computer only understands machine language, assembly language must be converted to machine language in order to be executed. The program that does this conversion is known as an assembler or a translator.


</p><p>


<h4>HIGH-LEVEL LANGUAGES (HLL)</h4>


</p><p>


Although assembly language is one level higher than machine language, it is still unfriendly to humans. To facilitate programming, languages had to move away from the machine level and get closer to natural language. Several new languages were designed after assembly language to serve this purpose, and became known as <span class="bi">High-Level Languages (HLL)</span>. 


</p><p>


Some of the well-known HLL's are FORTRAN, Lisp, PL1, Pascal, COBOL, BASIC, C/C++, and Java. Each language was developed for a particular design purpose and to facilitate programming for a particular field. However, in order for the computer to understand these high-level languages, they need to be translated into machine language so that the computer can understand them, thereby enabling the program to be executed. There are two types of translators: the Compiler and the Interpreter. The Compiler immediately converts the entire program to LLL, so that it can be executed later, while the Interpreter converts each statement and executes that statement. Each translator has it's own advantages and disadvantages, which we won't go into further detail for now. 


</p><p>


Let us look at how these high-level languages have evolved. We can start with FORTRAN (FORmula TRANslator) and ALGOL (ALGOrithmic Language), which were the first two popular High-Level Languages designed in the mid-1950's. FORTRAN and ALGOL were designed to solve mathematical and scientific problems. ALGOL was used mostly in Europe, while FORTRAN was popular in the US. Although ALGOL was rich in theory and more structured in comparison to other languages, it still did not survive despite several extensions that were made to make this language more useful. It should be mentioned that although ALGOL became obsolete and FORTRAN lost its popularity, both languages have given significant contribution to the design of most other languages. 


</p><p>


The design of COBOL (COmmon Business-Oriented Language) was aimed to serve the needs of the business community. Both FORTRAN and COBOL have survived up to now, but they have lost their popularity. At one time almost all mathematical and scientific programs were written in FORTRAN; as a result, huge libraries and packages that had been created to eliminate re-programming throughout the years could not be easily disposed. Similarly, almost all businesses have invested in COBOL, and millions of programming codes were written during those years. These codes cannot be easily substituted, and the cost of transferring these codes to other languages of choice would be astronomical. Therefore, FORTRAN and COBOL are still being used because of their previous domination. ALGOL, COBOL, and FORTRAN may no longer be viewed as the best programming languages any more, but they nevertheless are the basis of many other languages in use today. Another language, Lisp (List Processing) was designed to fulfill the need of researchers in the field of artificial intelligence. Lisp is known as a symbolic language with a structure that is quite different from other languages. 


</p><p>


<h4>C AND C++ AS HIGH AND LOW-LEVEL LANGUAGES</h4>


</p><p>


C and C++ have features and characteristics of high-level languages, but can also manage low-level features such as binary operations on bits (bit wise operation) and memory address manipulation. The C language was developed during the 1970's at Bell Labs to challenge the domination of assembly language in system programming. It was tested successfully by way of a powerful operating system known as UNIX. Ever since then, the C language has become a language of choice with scientific and business applications. In academic institutions, C replaced Pascal as the teaching language, not because it is an easy language to learn but because of its popularity and market demand. In the 1980's, a superset of C called C++ was designed at AT&T Bell Labs to incorporate the already demanding features of object-oriented programming (OOP) into the C language, so it can fulfill the needs of software developers and the marketplace.


</p><p>


Turbo C/C++, Microsoft C/C++, Think C/C++ are dialects of C/C++ in the world of personal computers. The latest, Java, is a mixture of good features from C/C++ and other existing languages like Smalltalk, and even incorporates some features from Lisp.


</p><p>


<h4>HOW DO LANGUAGES DIFFER FROM EACH OTHER</h4>


</p><p>


If you are wondering how similar and different programming languages are, here is an example. The task is to add two numbers, the numbers are placed in two memory locations and the result should be stored in another memory location. Examples follow:  


</p><p>


<code>

Machine Language:		1111001110000<br/>

						0001000011110<br/>

						1000001000000<br/>





Assembly Language:		mov a, R1<br/>

						add   b, R1<br/>

						mov  R1, c<br/>

FORTRAN:			c = a + b<br/>

ALGOL:				c :=  a + b<br/>

COBOL:				add a to b giving c<br/>

APL:				c ¬ a + b<br/>

Lisp:				(set!  c  (+  a  b) )<br/>

</code>

Most of the other languages such as BASIC, PLI, C/C++, and Java use the statement       

<br><strong>c = a + b</strong>, which is the same statement that FORTRAN uses.


</p><p>


<h4>PROGRAMMING EVOLUTION</h4>	


</p><p>


You may want to know how programming concepts started. One can look back to the early stages of human evolution when thoughts and plans were put together to perform a necessary task. If you raise the question as to whether programming concepts or programming languages were introduced first, you can compare it to the age-old question of <i>which came first, the chicken or the egg</i>. One thing we can say is that the evolution of programming concepts and programming languages is correlated. Just like programming languages, programming concepts have gone through many different stages since their beginnings. 


</p><p>


Let us discuss what programming is, and how different people view it. It has been said that programming is a technique, a strategy, and involves a lot of thinking. Some suggested that programming requires intuition. Many people associate programming with math, science, and/or engineering. Since it is a human activity, it has been argued that programming is an art or even a social or psychological subject. There were and still are people who associate programming with religion, in the sense that at some stage you must just believe in it. Some people argue that the definition of programming depends on what you want it to do and how you want to do it.  In truth, programming is a combination of some or all of the above.


</p><p>
 	

If I had to find an analogy between programming and other activities, I would use painting as an example because both involve planning, technique, style, and use of tools, skill, and even intuition. 


</p><p>




<h4>PROGRAM CONTROL FLOW</h4>


</p><p>


How does a program flow?  A program is comprised of several steps. Each step will take you to the next and so on until you reach the end in a sequential flow. There are times within this <i>sequential flow</i> when you will <i>make decisions</i>; and based on the results of these decisions, you may have to branch off (<i>decision flow</i>) to take other steps. Each branch of the program will have its own steps, which eventually will meet each other at some point and continue its sequential flow. There are situations in the program in which you will want to repeat certain steps over and over again. This repetition is called a <span class="bi">loop</span>, meaning that the flow of the program is redirected after execution of some steps to its designated starting point (<i>repetition flow</i>). The control flow of the loop must eventually reach its end to continue its sequential order. Notably, the control flows (<i>sequence, decision-making, and repetition</i>) are the most important elements of programming because programs are dependent on them.  


</p><p>


<h4>GOTO PROGRAMMING</h4>


</p><p>


Now that we understand how a program flows, let us take a look at the programming changes that have taken place over the past few decades. Early programs were <span class="bi">line-oriented</span>, meaning that each line contained one statement. A problem arose whenever decision-making was involved in the program, since this involved more than one way to follow and each way could require several statements. Thus, due to the restriction of one statement per line, it was not possible to perform these tasks next to each other. As a result, the flow of the program for one part of decisions would be made to continue somewhere else, while the other part of the decision would flow its normal sequential path, and they would not interfere with each other. These two alternative actions would eventually wind up meeting each other, and the program flow would continue its sequential path. The <span class="bi">goto</span> statement, provided by the languages, performs the task of going to another statement(s) and coming back if needed.  


</p><p>


<h4>GOTO STATEMENTS AND SPAGHETTI PROGRAMMING </h4>


</p><p>


The numerous goto statements used here and there can make the program difficult to follow and understand, thus prone to error. As a result, most of the big programs created a situation that later became known as <i>spaghetti programming</i> or <i>rat's nest programming</i>. Programmers had to use <i>flowcharts</i> to map out the flow of the program, so that the connections of scattered program codes could be easily viewed and understood. 

  
</p><p>


<h4>STRUCTURED PROGRAMMING</h4>


</p><p>


To restrain or eliminate goto statements, different programming methods were suggested, and new features were added to the programming languages. To fulfill this need, a concept called <i>block structured programming</i> was introduced which allowed grouping of more than one statement (or <i>block</i>) in the situation such as decision-making or repetition. In addition, the allocation and freeing of memory within the block allowed larger programs to be executed. That was the turning point, especially since there was a limit in the size of computer memory in the earlier days. 

Whether to use or not to use the goto became a long-lasting controversial issue and still remains a residual debate. The ongoing debate is whether to eliminate goto totally or to use it properly.


</p><p>


<h4>SOFTWARE ENGINEERING</h4>


</p><p>


Advancements in the design of hardware circuitry, and Large-Scale Integrated Circuits (LSI), made it possible for programmers to program more and to write larger programs by having an access to larger memories.  However, this led to a disproportional growth of the programs and resulted in chaos. Due to this software crisis, software engineering was directed to bring a standard methodology for program development (software). Modular programming forced the programmer to think in modular terms, breaking the program into smaller units (modules), and tackling each module separately (divides and conquers).


</p><p>


<h4>PROVING CORRECTNESS OF PROGRAM</h4>


</p><p>


Despite several enhancements in programming, programs still contained many errors and a large amount of time was spent to debug them. Writing error-free programs has always been uppermost in the minds of programmers and software developers. At one point, mathematically proving that the program is correct became a hot issue and received special attention. That meant you had to prove the program was correct even before the program had been entered into the computer. Proving the program's correctness was a tedious job and was not an easy task. After all, some of the errors had nothing to do with the problem specification, but rather were generated as a result of human negligence, such as data entry. 


</p><p>


<h4>POPULAR AND CURRENT EXISTING PROGRAMMING PARADIGM</h4>


</p><p>


Throughout the evolution of programming, a variety of techniques, style, and programming methods (paradigm) have been proposed and advocated to suit a specific need.  Some of these popular and current existing methods are functional programming, logical programming, visual programming, event programming, and object-oriented programming.  Although it is not necessary for you to understand all these concepts, it is useful to know that they exist.


</p><p>


One or more of these techniques are embedded in the design of a particular programming language. In functional programming, the program is divided into a smaller unit, known as a function or a subprogram.  Each function may be composed of several other functions, in which the innermost function upon completion of its task returns a value to the outer function.  


</p><p>


In functional programming, data manipulation is performed differently than other programming paradigm. For example, data is represented symbolically rather than being grouped as a stream of numbers and characters. Functional programming puts great emphasis on what is known as <i>recursion</i>, that is defining a solution to a problem in terms of itself.  Therefore, programmers must seek recursive solutions to a problem, which is not an easy task for beginners. An example of recursion would be a factorial problem. The factorial of number 4 is defined as the factorial <i>of</i> number 3 multiplied by 4, and the factorial of 3 is the factorial <i>of</i> 2 multiplied by 1. The language Lisp is a popular functional programming language, mainly used in artificial intelligence research laboratories such as that in MIT. 


</p><p>


Logical Programming has incorporated the principles of symbolic logic and its operators  (<span class="bold">and, or, not</span>). In addition, the language contains a built-in database that holds facts, rules, and embedded built-in search. These components are referred to as a <i>knowledge base</i> and a <i>search engine</i>. Perhaps the greatest accomplishment of logical programming is in its automation rules of inference so that again the programmer does not have to re-invent a complicated operation step by step. The programming language Prolog is a popular language that is used in logic programming. Functional and logical programming have been widely used in the field of artificial intelligence and the development of expert systems. 


</p><p>


Visual programming provides a series of available graphic toolboxes to enable the programmer to create their own Graphical User Interface (GUI) without getting involved in the nitty-gritty of lower-level details that require writing hundreds of programming codes. In event programming, certain tasks perform based on events carried out by devices such as the click of the mouse, key depression, etc.  Visual C++ and Visual Basic are popular programming languages of visual programming and event programming.  

 	
</p><p>


Object-Oriented Programming (OOP), developed over thirty years ago has become a hot issue these days. In the heart of OOP lies the concept of <i>class</i> and its instance-<i>object</i>. The fact is that the real world around us is made up of objects and every object belongs to a particular class. The class encapsulates the object's data and its associated operations (functions) into one entity. There is no doubt that OOP will dominate future programming; however, only the future will tell us whether we can transcend this mode of programming.  C++, Smalltalk, and Java are among the most popular object-oriented programming languages. 


</p><p>


<h4>A LITTLE HISTORY OF C AND C++</h4>


</p><p>


Dennis Ritchie designed the C Programming language in 1973 for the purpose of developing the UNIX operating system. An earlier language called B, designed by Ken Thompson, heavily influenced C. The B language came from BCPL, which came from CPL, which was a descendant of the language ALGOL. ALGOL was one of the first high-level languages designed during mid-fifties and its use was mainly in Europe. Subsequent high-level languages, such as Pascal and Ada were also based on ALGOL.  About the time of ALGOL's design, FORTRAN was designed as one of the early and most popular languages used to solve scientific problems. Subsequently, COBOL was developed for the business community. Theoretically, ALGOL is a very powerful language, but it never attained user popularity.  The language B was designed for system programming at Bell Labs to bring ALGOL down to earth; similarly, C was created to make B more practical. C inherits many concepts, such as block structure, from ALGOL. C has many similarities with FORTRAN, such as input/output format and data type conversion. 


</p><p>


Although C was designed as a system programming language, it is now recognized as a general-purpose language, and many applications and business programs have been written in C. C's capability for numerical manipulation of data and its ability to access numerous built-in functions make it as valuable as FORTRAN. C's input and output formatting and string manipulation capabilities enable it to handle business applications as efficiently as COBOL. C's speed, memory address manipulation, and its ability to access low-level (hardware) routines made it equivalent to assembly language. In order to enhance the C language, a superset of C called C++ was created by Bjarne Stroustrup, from Bell Labs (AT&T), in the early 1980's. Originally C++ was called C <i>with classes</i> because it incorporated object-oriented programming into C.  As a matter of fact, one reason C++ was developed because C could not efficiently carry out simulation projects. Simula67 was one of the earliest object-oriented programming languages. As a result, some of the features of <i>Simula67</i> were extended to C language. Objects are defined by classes where data and function members are put together. The fact that objects represent the world around us makes it necessary to incorporate the object-oriented concept into programming languages. In addition to the object-oriented programming concept, some of the other extended features include input/output, reference parameters, and comments. However, there are notations in C that are unfriendly, which causes misconceptions in programming. Despite this imperfection, C/C++ is among the most powerful and most widely used high-level languages. When all of the above attributes are considered, it becomes clear that C/C++ is a great tool for programming.


</p><p>


<h4>WHAT DOES A PROGRAM LOOK LIKE?  LET'S SEE THE BIG PICTURE</h4>


</p><p>


Many people have not yet seen a program; therefore, for them a program is an entity that is both mysterious and incomprehensible. Let me show you a small, but nonetheless useful and interesting program. At this moment, you don't need to understand all of the material in this program. I will explain it in greater detail later. The concept of this program is known as <i>searching</i>, which is used in most computer applications including banking, supermarkets, schools, word processors, and even the computer itself. For our purposes, this program has been written as simply as possible. This program acts as if it were a telephone operator whose job is to locate a telephone number. This search program is written in both C and C++, so you can see some of the differences between both languages. 

 

<code>

1.	#include &lt;stdio.h&gt; <br/>

2.	#include &lt;string.h&gt;<br/>

3.	

4.	int  main(){<br/>

5.	     char searchname[15], name[15], telephone[14];<br/>

6.	      FILE *fp;<br/>

7.	      printf ( "ENTER THE SEARCH NAME: " );<br/>

8.	      scanf ( "%s", searchname );<br/>

9.	      fp = fopen ( "data.in", "r" );       <br/>

10.	      while( fscanf( fp,"%s%s", name, telephone ) != EOF ){<br/>

11.	           if( strcmp ( searchname, name ) == 0 ){<br/>

12.	               printf( " %s\n", telephone );<br/>

13.	               return 0;<br/>

14.	           }  /* end of if */<br/>

15.	      } /* end of loop */<br/>

16.	      printf( "NAME NOT FOUND\n" );<br/>

17.	      return 0;<br/>

18.	}  /* end of main */ <br/>

</code>

<span class="figure">Figure 1.1 - <span class="bi">C</span> version of the Telephone Operator program</span>

<code>

1.	#include &lt;iostream&gt;<br/>

2.	#include &lt;fstream&gt; <br/>

3.	#include &lt;string.h&gt;<br/>

4.	using namespace std;<br/>

5.	

6.	main(){ <br/>

7.	      char  searchname[15], name [15], telephone[14];<br/>

8.	      cout &lt;&lt; "ENTER THE SEARCH NAME:  ";<br/>

9.	      cin &gt;&gt; searchname;<br/>

10.	      ifstream fin( "data.in" );<br/>

11.	      while(fin &gt;&gt; name &gt;&gt; telephone){<br/>

12.	           if( strcmp( searchname, name ) == 0 ){<br/>

13.	                cout &lt;&lt;  telephone &lt;&lt; endl;<br/>

14.	                return 0;<br/>

15.	           }  // end of if<br/>

16.	      }  // end of loop<br/>

17.	      cout &lt;&lt; "NAME NOT FOUND" &lt;&lt; endl;<br/>

18.	      return 0;<br/>

19.	}  // end of main<br/>

</code> 

<span class="figure">Figure 1.2 - <span class="bi">C++</span> version of the Telephone Operator program</span>


</p><p>


<h4>HOW DOES THE TELEPHONE OPERATOR PROGRAM WORK?</h4>

</p><p>


The purpose of the Telephone Operator program is to search for an individual's telephone number. First the program (Figure 1.2) interacts with the human user by requesting a name 

<code>line #6: ENTER THE SEARCH NAME:</code> The program then accesses a data file (data.in) which contains previously stored names and corresponding telephone numbers that could exceed millions of individuals. When a name and its corresponding telephone number are brought from a data file into the program 

<code>line #9: fin>>name>>telephone)</code>

the name input by the user is compared with the name extracted from the data file <pre class="prettyprint">line #10: strcmp (searchname, name)</pre>

If a match occurs between the input name and the name from the data file, the corresponding phone number is displayed 

<code>

(line #11: cout&lt;&lt;telephone).

</code>

 If the entire data file is exhausted and no match is found, the program displays a message

<code>

(line #15: cout&lt;&lt;"NAME NOT FOUND").</code>

<h4>INPUT AND OUTPUT OF THE TELEPHONE OPERATOR PROGRAM</h4>


</p><p>


Input of the above search program consists of a series of names and corresponding telephone numbers that have been previously typed, and it is stored in a file conventionally called data.in as shown below:

<code>

ADAM			(516)111-1111<br/>

SARAH			(718)222-2222<br/>

ABRAHAM		  	(212)333-3333<br/>

JOHN			(914)444-4444<br/>

MARY       		(203)555-5555<br/>

</code>

<span class="figure">Figure 1.3 - Input file data.in used for telephone search programs of Figures 1.1 and 1.2</span>


</p><p>


In addition, there will be another input that the user will enter interactively while the program is in execution. In this example, the program will ask the user to enter a search name, and the user will type SARAH.	 


</p><p>


There will be two kinds of output in this <i>search</i> program. When the program finds a match between the human user and the data file, it will display the found telephone number. When no match is found, the program will display the NAME NOT FOUND message.

<br>

The following is the sample of the program's input and output.

<code>

ENTER THE SEARCH NAME:  SARAH<br/>

(718) 222-2222<br/>

ENTER THE SEARCH NAME: EBRAHIMI<br/>

NAME NOT FOUND<br/>

</code>

<span class="figure">Figure 1.4 - Output of the telephone search programs of Figures 1.1 and 1.2</span>


</p><p>


<h4>PROGRAMMINIG OPPORTUNITIES</h4>



There is no doubt how drastically programming has reformed and reshaped our society within the last five decades. These changes have been gradual. It was as though one day we awakened and realized that most of our interactions in our neighborhood, workplace, and school are programmed. And now, whether we like it or not, more programs will surround our lives in business, school, and even at home.

<br>

It seems that today it has become mandatory to know programming in order to know what is going on, to be able to make decisions and to have a choice or a voice, rather than just being a passive consumer. The field of programming is such that you can hit many birds with one stone. It can help you implement your ideas or others, as the old saying goes "take the ball and run with it".


</p><p>


<h4>THE MAGIC OF PROGRAMMING: TRANSFER OF LEARNING</h4>



One amazing fact about programming is its transfer of learning, which I call the magic of programming. It is possible to write one program, and then apply it to different situations using a different data file with the same format, but without making any changes to the program. For example, a telephone operator program can magically become a generic program to be used as a language translator holding a data file with English words and their translation. Similarly, the same program (consists of 17 lines) can run with a data file containing the item names and their prices in a supermarket program. In the following example the telephone operator program has been transferred to a generic form that searches a data file that contains an unlimited amount of item names and their associates. 


</p><p>


<code>

1:	#include &lt;iostream&gt; <br />

2:	#include &lt;fstream&gt;<br />

3:	#include &lt;string.h&gt;<br />

4:	using namespace std;<br />

5:	<br />

6:	main(){<br />

7:	      char searchname[15], itemname [15], associateitem[14],  filename[13];<br />

8:	      cout &lt;&lt; "ENTER THE DATA FILE NAME:  ";<br />

9:	      cin &gt;&gt; filename;<br />

10:	      cout &lt;&lt; endl &lt;&lt; "ENTER THE SEARCH NAME:  ";<br />

11:	      cin &gt;&gt; searchname;<br />

9:	      ifstream fin( filename );<br />

10:	      while( fin &gt;&gt; itemname &gt;&gt; associateitem ){<br />

11:	           if( strcmp( searchname, itemname ) == 0 ){<br />

12:	                cout &lt;&lt; associateitem &lt;&lt; endl;<br />

13:	                return 0;<br />

14:	           }  // end of if<br />

15:	      }  // end of loop<br />

16:	      cout &lt;&lt; "NAME NOT FOUND" &lt;&lt; endl;<br />

17:	      return 0;<br />

18:	}  // end of main<br />

</code>

<span class="figure">Figure 1.5 - C++ item and associated item program</span>


</p><p>


The filename <i>engtospa.in</i> consists of English words and their associated Spanish words. 

<pre>

HELLO			HOLA

BOOK			LIBRO

SCHOOL			ESCUELA

WATER			AGUA

COMPUTER		COMPUTADORA

FLOWER			FLOR

</pre>

<span class="figure">Figure 1.6 - Input file engtospa.in used for associated item program of Figure 1.5</span>


</p><p>


The following is the sample input and output of the translation program.

<pre>

ENTER THE DATA FILE NAME:  engtospa.in

ENTER THE SEARCH NAME: WATER

AGUA

</pre>

<span class="figure">Figure 1.7 - Output of associated item program of Figure 1.5 using data file engtospa.in</span>


</p><p>


Running the program with the following data file can retrieve a bank's account balance: <span class="bold">bankbal.in</span>

<pre>

HOPER		 	5000.90

TOMPSON			1000.00

RITCHIE			2000.00

STROUSTRUP		2000.99

HAL			   -2100.00

</pre>

<span class="figure">Figure 1.8 - Input file bankbal.in used for associated item program of Figure 1.5</span>


</p><p>


Sample input and output:

<pre>

ENTER THE DATA FILE NAME:  bankbal.in

ENTER THE SEARCH NAME: TOMPSON

1000.00

</pre>

<span class="figure">Figure 1.9 - Output of associated item program of Figure 1.5 using data file bankbal.in</span>


</p><p>


Similarly, the data file <i>fruitpri.in</i> consists of fruit names and their associate prices that can be used in a supermarket.

<pre>

APPLE			0.89

CHERRY			1.89

APRICOT			2.00

PEACH			0.79

</pre>

<span class="figure">Figure 1.10 - Input file fruitpri.in used for associated item program of Figure 1.5</span>	

<pre>

ENTER THE DATA FILE NAME: fruitpri.in 



ENTER THE SEARCH NAME: APPLE

0.89
</pre>

<span class="figure">Figure 1.11 - Output of associated item program of Figure 1.5 using data file fruitpri.in</span>


</p><p>


You can't imagine how many data files you can run with this small program. This magical program of approximately 15 lines of code is worth memorizing, even though you may not understand each line's function at this time. You may think there is a limit to this program, but remember there is always room to expand and tailor it to more complex needs. In addition, as input data increases, this program may bog down and you may wish to do the program differently; yet, even if you do so, most of the underlying concepts will remain the same. This program has the potential, with some modification and expansion, to act as a dictionary, a database for a library, a school administration program, a tutoring system, or even a complex program such as an IRS information retrieval system. 


</p><p>


<h4>THE MYSTERIES OF PROGRAMMING</h4>


When a puzzle is solved it becomes trivial, and the solution becomes simpler than originally thought. The same happens to programming. We tend to view events around us in a logical pattern, but not all decisions made by others or ourselves are logical, and what we think is logical may be illogical to others. Novice programmer will encounter many difficult situations especially during the early learning stages. They are bewildered and overwhelmed by looking at a program and seeing a bunch of unfamiliar symbols. Many questions arise as to why certain symbols, names, and rules are used. The lack of understanding and rationale behind these notations leads to great frustration, which results in withdrawal or discontent from learning programming. It should be realized and understood that not all usage of notations is apparent and some may remain a mystery while others may reveal themselves as the learner gains knowledge and experience. Some of the programming mysteries can be attributed to a multitude of reasons such as hardware and technological constraints, historical reasoning or even individual preferences.


</p><p>


<h4>SOME EXAMPLES OF PROGRAMMING MYSTERIES</h4>


The following are some examples of what is known as a mystery to some.


</p><p>


<h4>Why the Symbol   *   Is  Used  for Multiplication and Not  X ?  </h4>

You may have thought that the reason for this is so the computer would not confuse the multiplication sign with the letter X. If your answer is correct, why have they used the symbol / to represent the division operator instead of the regular division symbol ¸ used in elementary school?  The answer to the question is that / happened to be an available symbol on the original keypunch machine in those days. 


</p><p>


<h4>What Number Comes After  Integer  32767? </h4>

<br>

You would think the answer is 32768, wouldn't you? How about the number after 32768?  Isn't it 32769?  The next number after 32767 is -32768 followed by -32767 and so on. Can you imagine being in the middle of a crucial calculation and not being aware of this! The mystery stems from the decision of the language designer to allocate a limited amount of memory location (16 bits), which as a result can only hold from -32767 to 32767. The programmer must explicitly request a longer integer to resolve this matter.


</p><p>


<h4>What Would Be the Result of the Following Fahrenheit-To-Celsius Conversion Formula  C  =  5  /  9  *  (F -32)?  </h4>

<br>

What would happen if you plug in the numbers 32, 41, or 131 for the value of F to solve the above equation? No matter what value you enter, you will get zero. The reason is that, 5 and 9 are both integers (whole numbers) the result of 5/9 will be an integer value which is zero. This problem can be resolved by adding a decimal point to one of the integers, for example, 5.0/9. 


<br><br>


<span class="bold">Which of the Following C/C++ Statements Will Compare Two Values?</span>



<pre>
I.  if (a = b) cout &lt;&lt; "BOTH EQUAL";

		else cout &lt;&lt; "BOTH NOT EQUAL";
	
II. if (a = = b) cout &lt;&lt; "BOTH EQUAL";

	 	else cout &lt;&lt; "BOTH NOT EQUAL";
	 </pre>

The first statement is a valid statement in C/C++, but it does not compare two values.  The correct answer is the second statement, since it uses two equal signs (= =). The reason for this is that in C/C++, the single equal sign (=) is used for <i>assignment statement</i> rather than for <i>equality comparison</i>. This may confuse you, and it is good for you to know that even an expert programmer has problems with cases such as these. You may ask why not use  = for equality and = = for assignment. Obviously the C designer will defend this, by justifying that C is in favor of typing less on the keyboard and therefore equality operator is less frequently used than assignment. Mysteriously enough, <span class="bold">and</span>, and <span class="bold">or</span> are also represented by double strikes, as <span class="bold">&&</span> and <span class="bold">||</span>, respectively, as though someone had sticky fingers or a sticky keyboard.  This matter will be discussed further in later chapters.  


<br><br>


<h4>CLOSING REMARKS AND LOOKING AHEAD</h4>

<br>

A program is the mind of the computer and without it the computer is useless, so there is no doubt how important programming is.  Programming is a concept that consists of a set of rules that is not difficult to learn. A good programming language leads to better programming performance and results. Throughout history, programming concepts and languages have evolved and changed. Several programming methods (paradigms) and several languages have gained popularity and then lost it. At one time Structured Programming was a big issue within the programming community, and FORTRAN and COBOL were the languages of choice for the scientific and business communities. Today, object-oriented Programming (e.g. C++) is favored over traditional procedural programming (e.g. C). As a result, C/C++, both being powerful languages, have attracted those dealing with Procedural Programming (traditional) and Object-Oriented Programming (new era), and have become the languages of choice.


