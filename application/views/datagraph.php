<style>
    body {
        background-color: wheat;
        background-size: cover;
    }
</style>
<?php if ($this->session->userdata('level') == 'Admin') { ?>
    <div class="container my-4">
        <div class="row">
            <h1>Data Survei Karyawan</h1>
            <p>Data kuesioner work life balance karyawan</p>
            <button class="btn btn-danger" onclick="confirmReset()">Reset</button>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <?php $i = 1;
            foreach ($chartData as $column => $data) : ?>

                <div class="col-md-6 p-2 bg-light order-3">
                    <canvas id="<?php echo $column; ?>Chart"></canvas>
                    <script>
                        var number = <?php echo json_encode($chartData[$column]); ?>;

                        function findMaxNumbers(numbers) {
                            if (numbers.length === 0) {
                                return [];
                            }

                            let maxNumbers = [numbers[0]];

                            for (let i = 1; i < numbers.length; i++) {
                                const num = numbers[i];
                                if (num > maxNumbers[0]) {
                                    maxNumbers = [num];
                                } else if (num === maxNumbers[0]) {
                                    maxNumbers.push(num);
                                }
                            }

                            return maxNumbers;
                        }

                        var result = "<?php echo $column; ?>";
                        var ctx = document.getElementById("<?php echo $column; ?>Chart").getContext('2d');
                        var <?php echo $column; ?>Chart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: <?php echo json_encode($chartLabels[$column]); ?>,
                                datasets: [{
                                    label: '<?php echo $labels[$column] ?>',
                                    data: <?php echo json_encode($chartData[$column]); ?>,
                                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        labels: {
                                            generateLabels: function(chart) {
                                                var originalLabels = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                                                originalLabels.forEach(function(label) {
                                                    if (label.text.length > 80) {
                                                        label.text = label.text.substring(0, 60) + "..."; // Truncate labels longer than 10 characters
                                                    }
                                                });
                                                return originalLabels;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        // console.log(result);
                    </script>
                    <?php 
                    // var_dump($chartMost);
                    $values = [];

                    if (isset($chartMost[$column])) {
                        array_walk($chartMost[$column], function($innerArray) use (&$values) {
                            $values = array_merge($values, (array)$innerArray);
                        });
                        echo "Pilihan terbanyak saat ini, yaitu:  ";
                        echo implode(', ', $values);
                        
                    } else {
                        echo "Selected outer array does not exist.";
                    }
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php } else { ?>
    <div class="container my-4 bg-dark text-white">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Restriction Access (Admin Only)</h2>
            </div>
        </div>
    </div>
<?php }?>
<script>
    function confirmReset() {
        if (confirm('Are you sure you want to reset the database? This action cannot be undone.')) {
            window.location.href = '<?php echo site_url('welcome/resetDatabase'); ?>';
        }
    }

    var x = <?php echo json_encode($chartMost); ?>;
    console.log(x);
</script>