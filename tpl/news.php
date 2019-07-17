<div class="container">
    <h1>News</h1>

    <!-- use accordion, see: https://getbootstrap.com/docs/4.3/components/collapse/#accordion-example -->
    <div id="accordion-news" class="accordion">

        <?php $date='2019-07-04';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapse-<?=$date?>">
                       <?=$date?> - Science Data Center &quot;BioDATEN&quot; at GCC 2019 conference in Freiburg
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse show" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <small>(Source: <a target="_blank" href="//www.rz.uni-freiburg.de/rz/aktuell/bioDATEN-at-GCC2019">RUF</a>)</small>
                    <p>
                        <b>The just started Science Data Center "BioDATEN" was present at this year's Galaxy conference in Freiburg, the GCC 2019. The Science Data Center BioDATEN - Bioinformatics DATa ENvironment is a community effort in standardization, services and sustainable research data management. It plans to combine the tools and services provided in frameworks like Galaxy with efforts towards standardization and research data management.</b>
                    </p>
                    <p>
                        The digitalization changes the working habits in almost all scientific disciplines with vast impact on teaching, research and interdisciplinary collaboration. The challenges faced in bioinformatics arising from vastly growing amounts of data are exemplary for a discipline establishing new ways of scientific work and insight. <a target="_blank" href="//galaxyproject.org/events/gcc2019/">Galaxy</a> as a platform already provides a wide range of tools used by a significant proportion of the community presented in BioDATEN. Through the formed consortium, comprising of bioinformaticians, core facilities, compute centers and libraries, a <a target="_blank" href="//www.rz.uni-freiburg.de/rz/aktuell/2019-sdc-biodaten-kickoff">science data center for life sciences for Baden-Württemberg just got established</a>. The four-year project will report about the anticipated goals and the work plan intended to achieve them in the relevant communities.
                    </p>
                    <p>
                        BioDATEN will heavily depend on the technical infrastructure available through Galaxy and the project partners such as bwSFS, BinAC and bwCloud or the repositories provided by the university libraries in Konstanz and Tübingen. State-wide activities will be orchestrated through the <a target="_blank" href="//www.forschungsdaten.info/">work group on research data management</a>. The SDC creates a multi institutional network among the strongest bioinformatics research sites. The consortium brings together the compute centers of the universities of Freiburg and Tübingen; the DKFZ, the EMBL and the university (BioQuant) in Heidelberg; the university libraries of Konstanz and Tübingen; the Quantitative Biology Center Tübingen; Bioinformatics and Plant Biotechnology Freiburg; CLARIN-D Center Tübingen; Livestock Microbial Ecology Hohenheim; Disease Ecology and Evolutionary Genetics Konstanz; Clinic of Neurology Ulm.
                    </p>
                    <p>
                        The project within the third line of the eScience initiative of the state - the BioDATEN SCD is funded by the Ministry of Science, Research and the Arts Baden-Württemberg - got acquired and is handled by the eScience group of the computer center. It is part of the RDMG activities. The conference poster at <a target="_blank" href="//veranstaltungen.gdch.de/tms/frontend/index.cfm?l=8911&sp_id=2">GCC 2019</a> is one of it's first activities.
                    </p>
                </div>
            </div>
        </div>

        <?php $date='2019-03-27';?>
        <div class="card">
            <div id="heading-<?=$date?>" class="card-header">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?=$date?>" aria-expanded="true" aria-controls="collapseOne">
                        <?=$date?> - Positive appraisal for Science Data Center &quot;BioDATEN&quot;
                    </button>
                </h2>
            </div>
            <div id="collapse-<?=$date?>" class="collapse" aria-labelledby="heading-<?=$date?>" data-parent="#accordion-news">
                <div class="card-body">
                    <small>(Source: <a target="_blank" href="//jura.uni-freiburg.de/rz-en/aktuell-en/2019-sdc-biod?set_language=en">RUF</a>)</small>
                    <p>
                        <b>The request for SDC BioDATEN, which was handed in together with various partners from Tubingen, Konstanz, Heidelberg and many others, has received a funding recommendation. The project is planned to start by the middle of the year and will run as part of the third eScience funding line by the department for science, research and culture in Baden-Wurttemberg. The project complements the efforts for virtualized research environments (ViCE), bwSFS and the bwHPC-S5 activites, with the objective of establishing long-term infrastructures for a qualified research data management in the field of bioinformatics.</b>
                    </p>
                    <p>
                        The consortium that applied for the funding includes data-using researchers from all life sciences as well as bioinformatic method developers and infrastructure providers. The members of the consortium are leaders in digital data-driven research in life sciences as well as in information scientific questions. Between some of the members, long-lasting bilateral cooperations already exist. These should now be transfered to a consortium. Discipline-specific and information scientific aspects of research data management have already been tackled in shared projects or are part of current cooperation taking place as part of the de.NBI and bwHPC on a national and ELIXIR and Galaxy on an international level.
                    </p>
                    <p>
                        The coordination in Freiburg is done by the eScience department at the University IT Services. The project will receive financing for four years as part of the <a target="_blank" href="//mwk.baden-wuerttemberg.de/de/service/presse/pressemitteilung/pid/vier-science-data-centers-in-baden-wuerttemberg/">third eScience funding line of the department of science, research and culture in Baden-Wurttemberg</a>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>