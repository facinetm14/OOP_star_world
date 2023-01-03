<h1> This is a simple OOP project </h1>

<p> This is not oriented web, that said you won't see any fronted code, database, the purpose is not to build an app.</p>

<p>It's to practice (assert) my OOP skills.</p>

<strong>Version PHP used : PHP 8.1.13 (cli)</strong>

<h2>Classes</h2>
    <h3>Star:</h3>
Abstract class, I decided to make it so, because here a start should be a Footballer or Singer, that means can't be instanciate.<br  />
    <h4>attributs:</h4>
        <h5>protected :</h5> <p>id, fname, lname, birth, country, emailAdr, phone, salaire, isContract, category</p> <br/>
    <h4>methods:</h4>
        <h5>public:</h5>
            <p>getters and setters, signNewContract(), displayInfo(), doCharity()<p/><br/>
<h3>Footballer extends Star:</h3><br/>
<h3>Singer extends Star:</h3><br />

<p>* The method displayInfo is partially common, Footballer and Singer, call from parent and complete by themself by overloading <p>

<p>* The method doCharity is completely different for each, it's abstract so each class child should define how he want to perform.</p>

<p>If you have any suggestion (best practice, coding style) or collaboration don't hesitate to reach out, I'm willing to keep learning</p>

<a href="https://www.linkedin.com/in/facinet-kouyate-34a32718a/">Linkedin </a>
