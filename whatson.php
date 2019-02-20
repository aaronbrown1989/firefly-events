<?php include 'header.php';?>
  <main>
    <h1>Whats On</h1>

    <!--carousel  -->
    <div class="event-carousel">
      <div class="event-slide fix1">
        <h3 class="event-title">Event Name</h3>
        <p class="event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a arcu vel nulla cursus cursus venenatis a leo. Nunc lobortis tortor odio, nec condimentum dui scelerisque vestibulum. Mauris quis tellus mi. Sed fringilla mauris nibh, a suscipit ante vestibulum sed. Nam viverra fringilla commodo. Donec eget mi tempus, aliquam odio id, lobortis dolor. Aliquam erat volutpat. Cras egestas quam ex, et viverra lectus tincidunt quis. Nunc at ligula non lectus iaculis luctus. Aenean placerat justo dignissim tortor pellentesque faucibus. Proin pellentesque mauris mi, a tristique lectus maximus sit amet. Praesent pellentesque maximus turpis, quis elementum lorem maximus a. Nullam sit amet vulputate tortor. Cras a egestas sem. Sed aliquet non nibh in commodo. Sed porta magna eu nunc viverra, vestibulum ornare lorem dapibus.</p>
        <a href="#" class="button">more info</a>
      </div>
      <div class="event-slide fix2">
        <h3 class="event-title">Event Name</h3>
        <p class="event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a arcu vel nulla cursus cursus venenatis a leo. Nunc lobortis tortor odio, nec condimentum dui scelerisque vestibulum. Mauris quis tellus mi. Sed fringilla mauris nibh, a suscipit ante vestibulum sed. Nam viverra fringilla commodo. Donec eget mi tempus, aliquam odio id, lobortis dolor. Aliquam erat volutpat. Cras egestas quam ex, et viverra lectus tincidunt quis. Nunc at ligula non lectus iaculis luctus. Aenean placerat justo dignissim tortor pellentesque faucibus. Proin pellentesque mauris mi, a tristique lectus maximus sit amet. Praesent pellentesque maximus turpis, quis elementum lorem maximus a. Nullam sit amet vulputate tortor. Cras a egestas sem. Sed aliquet non nibh in commodo. Sed porta magna eu nunc viverra, vestibulum ornare lorem dapibus.</p>
        <a href="#" class="button">more info</a>
      </div>
      <div class="event-slide fix3">
        <h3 class="event-title">Event Name</h3>
        <p class="event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a arcu vel nulla cursus cursus venenatis a leo. Nunc lobortis tortor odio, nec condimentum dui scelerisque vestibulum. Mauris quis tellus mi. Sed fringilla mauris nibh, a suscipit ante vestibulum sed. Nam viverra fringilla commodo. Donec eget mi tempus, aliquam odio id, lobortis dolor. Aliquam erat volutpat. Cras egestas quam ex, et viverra lectus tincidunt quis. Nunc at ligula non lectus iaculis luctus. Aenean placerat justo dignissim tortor pellentesque faucibus. Proin pellentesque mauris mi, a tristique lectus maximus sit amet. Praesent pellentesque maximus turpis, quis elementum lorem maximus a. Nullam sit amet vulputate tortor. Cras a egestas sem. Sed aliquet non nibh in commodo. Sed porta magna eu nunc viverra, vestibulum ornare lorem dapibus.</p>
        <a href="#" class="button">more info</a>
      </div>
    </div>
    <div>
    </div>
    <!--Calendar -->
    <div class="whatson-container">
      <div class="events-calendar">
        <div class="calendar">
            <h3 class="calendar-header" id="monthAndYear"></h3>
            <table id="calendar">
                <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
                </thead>

                <tbody id="calendar-body">
                </tbody>
            </table>

            <div class="form-inline">
                <button class="button" id="previous" onclick="previous()">Previous</button>
                <button class="button" id="next" onclick="next()">Next</button>
            </div>
            <br/>
            <form class="form-inline">
                <label class="lead mr-2 ml-2" for="month">Jump To: </label>
                <select name="month" id="month" onchange="jump()">
                    <option value=0>Jan</option>
                    <option value=1>Feb</option>
                    <option value=2>Mar</option>
                    <option value=3>Apr</option>
                    <option value=4>May</option>
                    <option value=5>Jun</option>
                    <option value=6>Jul</option>
                    <option value=7>Aug</option>
                    <option value=8>Sep</option>
                    <option value=9>Oct</option>
                    <option value=10>Nov</option>
                    <option value=11>Dec</option>
                </select>


                <label for="year"></label><select name="year" id="year" onchange="jump()">
                <option value=1990>1990</option>
                <option value=1991>1991</option>
                <option value=1992>1992</option>
                <option value=1993>1993</option>
                <option value=1994>1994</option>
                <option value=1995>1995</option>
                <option value=1996>1996</option>
                <option value=1997>1997</option>
                <option value=1998>1998</option>
                <option value=1999>1999</option>
                <option value=2000>2000</option>
                <option value=2001>2001</option>
                <option value=2002>2002</option>
                <option value=2003>2003</option>
                <option value=2004>2004</option>
                <option value=2005>2005</option>
                <option value=2006>2006</option>
                <option value=2007>2007</option>
                <option value=2008>2008</option>
                <option value=2009>2009</option>
                <option value=2010>2010</option>
                <option value=2011>2011</option>
                <option value=2012>2012</option>
                <option value=2013>2013</option>
                <option value=2014>2014</option>
                <option value=2015>2015</option>
                <option value=2016>2016</option>
                <option value=2017>2017</option>
                <option value=2018>2018</option>
                <option value=2019>2019</option>
                <option value=2020>2020</option>
                <option value=2021>2021</option>
                <option value=2022>2022</option>
                <option value=2023>2023</option>
                <option value=2024>2024</option>
                <option value=2025>2025</option>
                <option value=2026>2026</option>
                <option value=2027>2027</option>
                <option value=2028>2028</option>
                <option value=2029>2029</option>
                <option value=2030>2030</option>
            </select>
          </form>
        </div>

        <p class="muted">Click a day to find out if there's an event on.</p>
      </div>


      <!--news articls -->
      <div class="news-articles">
        <h3 class="news-header">Latest News</h3>
        <div class="convert_box">
          <div class="article">
            <div class="article-image">
              <img src="img/news/news-company.png" alt="image for the article" class="article-image">
            </div>
            <h2 class="articleheader">How's the Company Doing?</h2>
            <p>Nulla commodo viverra felis sed ullamcorper. Nulla dapibus, tortor non congue tempus, tellus dolor lobortis dolor, sed mollis leo metus at nisl. In dolor ex, commodo at nisl quis, consequat tempus velit. Aenean consequat est quam, eget rhoncus ex varius quis.</p><br>
            <button type="button" name="button" class="button">Read More</button>
          </div>
          <div class="article">
            <div class="article-image">
              <img src="img/news/news-review.png" alt="image for the article" class="article-image">
            </div>
            <h2 class="articleheader">Latest Events Reviews</h2>
            <p>Nulla commodo viverra felis sed ullamcorper. Nulla dapibus, tortor non congue tempus, tellus dolor lobortis dolor, sed mollis leo metus at nisl. In dolor ex, commodo at nisl quis, consequat tempus velit. Aenean consequat est quam, eget rhoncus ex varius quis.</p><br>
            <button type="button" name="button" class="button">Read More</button>
          </div>
          <div class="article">
            <div class="article-image">
              <img src="img/news/news-details.png" alt="image for the article" class="article-image">
            </div>
            <h2 class="articleheader">Details About Company</h2>
            <p>Nulla commodo viverra felis sed ullamcorper. Nulla dapibus, tortor non congue tempus, tellus dolor lobortis dolor, sed mollis leo metus at nisl. In dolor ex, commodo at nisl quis, consequat tempus velit. Aenean consequat est quam, eget rhoncus ex varius quis.</p><br>
            <button type="button" name="button" class="button">Read More</button>
          </div>
          <div class="article">
            <div class="article-image">
              <img src="img/news/news-success.png" alt="image for the article" class="article-image">
            </div>
            <h2 class="articleheader">Events Success</h2>
            <p>Nulla commodo viverra felis sed ullamcorper. Nulla dapibus, tortor non congue tempus, tellus dolor lobortis dolor, sed mollis leo metus at nisl. In dolor ex, commodo at nisl quis, consequat tempus velit. Aenean consequat est quam, eget rhoncus ex varius quis.</p><br>
            <button type="button" name="button" class="button">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php include 'footer.php';?>
