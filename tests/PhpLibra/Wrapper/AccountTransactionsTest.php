<?php

namespace PhpLibra\Wrapper;

use Types\UpdateToLatestLedgerResponse;

class AccountTransactionsTest extends \BootstrapTest
{
    public function testConstructor()
    {
        $response = $this->getUpdateToLatestLedgerResponse();

        // TODO
        $this->assertTrue(true);
    }

    /**
     * @return UpdateToLatestLedgerResponse
     * @throws \Exception
     */
    private function getUpdateToLatestLedgerResponse()
    {
        $serializedJson = '{"responseItems":[{"getAccountTransactionBySequenceNumberResponse":{"proofOfCurrentSequenceNumber":{"version":320036,"blob":{"blob":"AQAAACEAAAABIX2mxrPhnxglz7Jnba7M47894DzyZkfHjfALNxslzJdEAAAAIAAAAJqH5agr2XKe1uG5IXJVztDGzKUdyXZ+/H+aUOJqhLMAAPfWfx9HabQBAAAAAAAAAAEAAAAAAAAAAQAAAAAAAAA="},"proof":{"ledgerInfoToTransactionInfoProof":{"bitmap":320036,"nonDefaultSiblings":["ytrD97gp5ycggRGBgzsEVLDOU8xcSIT7hpDSJVSWHMY=","6rTfL4a5ako/nF2UZij9Vbr7g7vfYFo9+zsAMPcknCk=","La7VsDEDJdX2m9p8bA3Olnpv+2VAKy3Rv+u+6kbaQ9g=","LzT1GNSPnBoxm/Xi+2yHTodRhzZ6hpHjGNeUGOZQ6yw=","pea/2/17oXirhG5+Tc+WFfcJ6BeWHBzmsOZNIR6ioOk=","HQWadANne5MWWLCXd8d5ACdXqOVkK5qGstMYm0KK6PA=","08RJBlashO6a8jXOxuvFmJKwED0b+wo5SrMsUf4usPg="]},"transactionInfo":{"signedTransactionHash":"8peHGDjy/4uosBRED39gjS9A6fxcakC74XM0LvIwc8U=","stateRootHash":"wXssHln/590iyRi9SGsV/a/PhCYhOMY/eByDgfhA+AE=","eventRootHash":"QUNDVU1VTEFUT1JfUExBQ0VIT0xERVJfSEFTSAAAAAA="},"transactionInfoToAccountProof":{"leaf":"BEdybzGMoHtR2t4Sa3AZ1HCMOcTnnJkLZ7pIrsVT0cKApYxpdsOQsyr9i8+O9uDBG8NFJZrnF67TJPiunZBq+Q==","bitmap":"/+AC","nonDefaultSiblings":["HHIk/8tZOkbV1bcjen9Q+GAUXrCp/UCGxckf5OsTxdM=","H9H2Gliuuct4Zp+6B22qTBw4xGISy235UTqVGhrvQ7s=","39GwlIzYT28Dm45JG8M14ku7A2MD8qVwHwmM6Y4bn+Q=","MISFa8WyQgSXe8qgu/cKS7MLsejOfmzI9lTevzkFQ0U=","J9IApivLLDIrtOC9DFqX019DWKiY/fB3eh+Kvk37wWs=","VXAtpr9c9uQDl+TDSt6zhla9S8Kr/Tr/PI/yU1ISAMk=","gXeLz9iNVL2VFuMtEIrD5a12/xCaozSkhMyQvcjYxAk=","DeagaFAvwEzMJHO0J+ts7NNReZo0Bn5DvwxqIzjoSAU=","sigypT8PAQNUrcFx8slXlTHl22XOvFZAmJMRBhV2S0o=","IzIv5e9KNcnpGUsJtn5dHnfD1Lv4XZIeN/ADZtk8nvE=","Pndnyt4yYymfzoPvfrAVfWpN2F2GLmAGGnzkM8s432w=","d/pf7yYs16BKHW3l3SoKJS0GgBmnUMrryERRmK7FDdo="]}}}}}],"ledgerInfoWithSigs":{"signatures":[{"validatorId":"kQK9exrX6PMQI8UANxzH0pcXWLRQz6icAD77OrGSpLg=","signature":"VtGQyPFzvNMzbxRNDeiKUMoPyukOTVjtmRwXxcJfYCN7zNa4GsyKlBaB6a/7Koh3d3ppojSuCpcH9JYQHOJ2Cw=="},{"validatorId":"GfkzFMvowJJaRJLrLy8ZfObhFxdEnCGPUOBD43+npfM=","signature":"dzSMnABXD1aNHlcPqqjsPVDtJvaP7TlYtuqyEgF0RERk+NTCNs4c08I2/8DQe93detctEy+IwaFgeKXQgpfJAA=="},{"validatorId":"O3x1bM6a19gBsHigjukd9fgSLkQBG0/fbWwgwBaCO48=","signature":"DlG8wiAyZHE717UxNvkLStrqjFx9jKF52jlaLMRtoaUZNsJoVxgLvtTySq57gANVAMQSbCI2VGj4PGJuJ15aCw=="},{"validatorId":"Joc97NkzAGWYiwrPUCdmK1CX+1CROuKiZStQqYad9Ps=","signature":"PNF+YwRDQu8PgbY/mJbuW9I6yTa4ggj+Vux6Wgtr8HOE9Bz+/ipBIOvuzxaS7YgqFGT3BtVyKw/i2D5pdRnRAA=="},{"validatorId":"wouVNZDFgReuhDFFbqKPZ8L54XMweLII4ae9W9QIHp4=","signature":"DuNikGftNtLKvCKo+HcjuIzBGVmzRhaszz5Ow+iskr9EgyjU1GmQHC8VeSRerU3r+PWVMNBfg4qcpSgXsiQWDw=="},{"validatorId":"SZVVnEhEt+QQHEhgNTKUAqi6SXbBviMIC6xb3famDw0=","signature":"YbIszK2ap3MqQ2/eKlxbAYzsvhhhGNC55DLg/kZHAKx/x5NT8c8ELbUDPFIqlkbL2tfY7AZ9lD3WRg7l/i2KCg=="},{"validatorId":"ZofppubD3g3E9+kerLxnaiKKnAxGRQu8y9EHJ4C/yzA=","signature":"p5ifJCVxVfjSrkrd9t7zAESqOiSe8IwFso1HBfUpwsmT4cGDE5dh3QldMw6nB1sbgsUbyFuFQl3Q6zJRJ3aeDA=="}],"ledgerInfo":{"version":320036,"transactionAccumulatorHash":"KiuhZdCXQT7WUv6TQYVOPdsA996rnNviz3RR4wZy2g4=","consensusDataHash":"dagg8F0wtAotCimw/EftAJr0WHk2ab/kIjy+iDUMsDU=","consensusBlockId":"qL7t54HqG+fZLUKH9/fKiTWWzozDJ5DkwoLxHqoOkno=","timestampUsecs":1563914116389859}}}';
        $response = new UpdateToLatestLedgerResponse();
        $response->mergeFromJsonString($serializedJson);
        return $response;
    }
}
